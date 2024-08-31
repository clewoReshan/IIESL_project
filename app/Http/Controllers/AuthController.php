<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function admin_reg_index()
    {
        return view('auth.adminReg');
    }
    public function admin_log_index()
    {
        return view('auth.adminLog');
    }
    public function admin_reg(Request $request)
    {
        try {
            $data = $request->validate([
                'nic' => 'required|unique:admin,nic',
                'full_name' => 'required',
                'contact_no' => 'required',
                'email' => 'required|unique:admin,email',
                'password' => 'required',
            ]);

            $hash_password = Hash::make($request->password);

            Admin::create([
                'nic' => $data['nic'],
                'full_name' => $data['full_name'],
                'contact_no' => $data['contact_no'],
                'email' => $data['email'],
                'password' => $hash_password
            ]);

            return redirect()->back()->with('success', 'Admin Create successfully');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput()->with('error', $errors);
        } catch (\Exception $e) {
            Log::error($e->getMessage(), ['stack' => $e->getTraceAsString()]);
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function admin_log(Request $request)
    {
        try {
            $request->validate(
                [
                    'email' => 'required',
                    'password' => 'required',
                ]
            );
            $user = Admin::where(['email' => $request->email, 'status' => 1])->first();
            
            if ($user && Hash::check($request->password, $user->password)) {
                $request->session()->put('admin', $user->email);
                $responseData = ['success' => true, 'message' => 'Login successfully'];
            } else {
                $responseData = ['success' => false, 'message' => 'Wrong email or password'];
            }
            
        } catch (ValidationException $e) {
            $responseData = ['success' => false];
        } catch (Exception $e) {
            $responseData = ['success' => false, 'message' => 'Email or password is wrong. Please try again.'];
        }


        if ($responseData['success']) {
            Session()->flash('success', $responseData['message']);
            return redirect()->route('admin_dashboard')->with('admin', $user);
        } else {
            return back()->with('error', $responseData['message']);
        }
    }
}

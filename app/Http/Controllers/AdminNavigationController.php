<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNavigationController extends Controller
{
    public function showLogin(){

        return view('login');
    }

    public function showDashboard(){

        return view('admin.dashboard');
    }

    public function showBook(){
        
        return view('admin.books');
    }

    public function showMember(){
        
        return view('admin.members');
    }

    public function showBooksReport(){
        
        return view('admin.books_report');
    }

    public function showDamagedBooks(){
        
        return view('admin.damaged_books');
    }

    public function showMemberReport(){
        
        return view('admin.member_report');
    }

    public function showAuditLog(){
        
        return view('admin.audit_log');
    }

}

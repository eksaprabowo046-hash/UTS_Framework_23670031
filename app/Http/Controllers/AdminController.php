<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the Admin Dashboard.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display the Calendar page.
     */
    public function calendar()
    {
        return view('admin.calendar');
    }

    /**
     * Display the Form Elements page.
     */
    public function formElements()
    {
        return view('admin.form_elements');
    }

    /**
     * Display the Table Plugins page.
     */
    public function tablePlugins()
    {
        return view('admin.table_plugins');
    }

    /**
     * Display the UI Modal Notification page.
     */
    public function uiModalNotification()
    {
        return view('admin.ui_modal_notification');
    }

    /**
     * Display the Login page.
     */
    public function login()
    {
        return view('admin.login');
    }
}

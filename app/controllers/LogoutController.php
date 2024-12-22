<?php

class LogoutController extends Controller
{
    public function logout()
    {
        destroySession();
        redirect('login');
        exit;
    }
}
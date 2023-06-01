<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    public function about()
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'about-us')
            ->where('active', '=', 1)
            ->first();
        if (!$widget) {
            throw new NotFoundHttpException();
        }
        return view('about', compact('widget'));
    }
}

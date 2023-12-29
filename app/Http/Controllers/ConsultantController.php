<?php

namespace App\Http\Controllers;
use OpenAI\Laravel\Facades\OpenAI;


class ConsultantController extends Controller
{

    public function consultant()
    {
//        $result = OpenAI::completions()->create([ 'model' => 'text-davinci-003', 'prompt' => 'PHP is', ]);
//        echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.

        return view('consultant');
    }
}


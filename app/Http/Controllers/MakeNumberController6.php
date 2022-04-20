<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeNumberController6 extends Controller
{
    public function level(Request $request)
    {
        // Combination of code for the level 
        $combinationCode = ['2', '6', '9', '4', '5']; // Level 6
        $levelTag = 6;
        $full1 = false; // Good number in correct row
        $half1 = false; // Good number in incorrect row
        $none1 = false; // No good number
        $full2 = false; // Good number in correct row
        $half2 = false; // Good number in incorrect row
        $none2 = false; // No good number
        $full3 = false; // Good number in correct row
        $half3 = false; // Good number in incorrect row
        $none3 = false; // No good number
        $full4 = false; // Good number in correct row
        $half4 = false; // Good number in incorrect row
        $none4 = false; // No good number
        $full5 = false; // Good number in correct row
        $half5 = false; // Good number in incorrect row
        $none5 = false; // No good number

        // Output of the Code with comma's
        $output = $combinationCode;
        $comma_maker = implode(", ", $output);

        // Input of the User with comma's
        $input = $request['input'];
        $chars = str_split($input);
        $comma_maker2 = implode(", ", $chars);

        // Check if the input is the same as the code but in the wrong order
        if ($request['input']) {
            if ($chars[0] == '2') {
                $full1 = true;
            } else if ($chars[0] == '6' || $chars[0] == '9' || $chars[0] == '4' || $chars[0] == '5') {
                $half1 = true;
            } else if ($chars[0] !== '6' || $chars[0] !== '9' || $chars[0] !== '4' || $chars[0] == '5'){
                $none1 = true; 
            }
            if ($chars[1] == '6') {
                $full2 = true;
            } else if ($chars[1] == '2' || $chars[1] == '9' || $chars[1] == '4' || $chars[1] == '5') {
                $half2 = true;
            }else if ($chars[1] !== '2' || $chars[1] !== '9' || $chars[1] !== '4' || $chars[1] == '5'){
                $none2 = true; 
            }
            if ($chars[2] == '9') {
                $full3 = true;
            } else if ($chars[2] == '2' || $chars[2] == '6' || $chars[2] == '4' || $chars[2] == '5') {
                $half3 = true;
            }else if ($chars[2] !== '2' || $chars[2] !== '6' || $chars[2] !== '4' || $chars[2] == '5'){
                $none3 = true; 
            }
            if ($chars[3] == '4') {
                $full4 = true;
            } else if ($chars[3] == '2' || $chars[3] == '6' || $chars[3] == '9' || $chars[3] == '5') {
                $half4 = true;
            }else if ($chars[3] !== '2' || $chars[3] !== '6' || $chars[3] !== '9' || $chars[3] == '5'){
                $none4 = true; 
            }
            if ($chars[4] == '5') {
                $full5 = true;
            } else if ($chars[4] == '2' || $chars[4] == '6' || $chars[4] == '9' || $chars[4] == '4') {
                $half5 = true;
            }else if ($chars[4] !== '2' || $chars[4] !== '6' || $chars[4] !== '9' || $chars[4] == '4'){
                $none5 = true; 
            }
        }

        // set data
        $tries = 0;
        $maxTries = 13;

        // storing $data to session
        session($tries);

        // retrieving data from session
        $trycount = session("tries");

        if (session("tries") == null) {
            $tries = 0;
        } else {
            $tries = session("tries");
        }

        // saving data to session
        if ($request['input']) {
            $new = $trycount + 1;
            $newdata = [
                'tries' => $new
            ];
            session($newdata);
        }

        // checks if trycount is over max attempts
        if ($trycount >= $maxTries) {
            $request->session()->forget('tries');
            return view('levels/gameover')->with(['levelTag' => $levelTag, 'trycount' => $trycount]);
        }

        // Next Level
        $nextLevel = $levelTag + 1;

        // Return pages with needed php tags
        if ($comma_maker2 == $comma_maker) {
            $request->session()->forget('tries');
            return view('levels/complete')->with(['levelTag' => $levelTag, 'nextLevel' => $nextLevel, 'answer' => $comma_maker2, 'trycount' => $trycount, 'input' => $input]);
        } else {
            return view('levels/6')->with(['trycount' => $trycount, 'output' => $comma_maker, 'anwser' => $comma_maker2, 'input' => $input, 'maxtries' => $maxTries, 'triescount' => $tries, 'full1' => $full1, 'half1' => $half1, 'none1' => $none1 ,'full2' => $full2, 'half2' => $half2, 'none2' => $none2, 'full3' => $full3, 'half3' => $half3, 'none3' => $none3, 'full4' => $full4, 'half4' => $half4, 'none4' => $none4, 'full5' => $full5, 'half5' => $half5, 'none5' => $none5]);
        }
    }
}
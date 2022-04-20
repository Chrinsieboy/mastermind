<?php // Enters php code space

namespace App\Http\Controllers; // Gets controllers

use Illuminate\Http\Request; // Gets the requests

class OrderHistoryController extends Controller // Creates the class OrderHistoryController
{
    public function show(Request $request){ // Creates public function show
        $orders = []; // Creates the orders variable with an array

        $orders[] = [1000,'11-11-2010',
            ['Super Mario Galaxy','Wii','49.50'],
            ['Mario Kart Wii','Wii','39.99']
        ]; // Adds the order to the array

        $orders[] = [1000,'11-11-2011',
            ['Skyrim','Xbox 360','49.50'],
        ]; // Adds more orders to the array

        if(isset($request->id)){ // Checks if the id is set
            $history = $orders[$request->id]; // Creates the history variable with the orders that has been requested
        }else{ // If the id is not set
            $history = $orders; // Creates the history variable with the orders
        }
        $total = 0; // Set the total to integer 0
        foreach ($history as $order){ // Loops through the history
            foreach ($order as $part){ // Loops through the orders
                if(is_array($part)){ // Checks if the part is an array
                    $total = $part[2]; // Adds the total to the total
                }
            }
            $order[] = $total; // Adds the total to the order
        }
        dd($history); // Dies and dumps the history
    }
}

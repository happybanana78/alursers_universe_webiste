<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $found = false;
        // Get Form Data
        $formData = $request->validate([
            "nft_name" => "required"
        ]);
        // Set Path To Metadata Folder
        $path = public_path() . "/metadata/*";
        // Get The Crude Number Of The NFT From Form Data
        $nftNumber = explode("#", $formData["nft_name"]);
        if (count($nftNumber) <= 1) {
            return redirect("/")->with("found", "NFT Not Found!");
        }
        // Loop All The Files
        foreach(glob($path) as $file) {
            // Lower Files Number
            if (str_contains($file, $nftNumber[1])) {
                // Open Each File That Is Still Left
                $metadata = fopen($file, "r");
                // Loop Each File Content
                while (($line = fgets($metadata)) !== false) {
                    // Isolate The Crude NFT Number
                    $firstNumberIsolation = explode("#", $line);
                    $secondNumberIsolation = explode('"', $firstNumberIsolation[1]);
                    $rarityIsolation = explode('{', $line);
                    foreach ($rarityIsolation as $rarity) {
                        if (str_contains($rarity, '"trait_type": "Rarity"')) {
                            $raritySplit = explode('"', $rarity);
                            foreach ($raritySplit as $string) {
                                if (str_contains($string, "Uncommon Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Uncommon Grade";
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "Rare Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Rare Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "Common Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Common Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "Epic Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Epic Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "Legendary Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Legendary Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "Mythic Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "Mythic Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                                if (str_contains($string, "God Grade")) {
                                    // Compare If It Matches With Form Data Number
                                    if ($secondNumberIsolation[0] == $nftNumber[1]) {
                                        $result = "God Grade";
                                        $found = true;
                                        return view("main", [
                                            "data" => $result
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($found == false) {
            return redirect("/")->with("found", "NFT Not Found!");                  
        }
    }
}

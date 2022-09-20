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
            // Filter files useless to open
            if (str_contains($file, $nftNumber[1])) {
                $metadata = fopen($file, "r");
                // Loop Each File Content
                while (($line = fgets($metadata)) !== false) {
                    $json = json_decode($line, true);
                    if ($formData["nft_name"] == $json["name"]) {
                        $found = true;
                        return view("main", [
                            "data" => $json["attributes"][6]["value"]
                        ]);
                    }
                }
            }
        }
        if ($found == false) {
            return redirect("/")->with("found", "NFT Not Found!");                  
        }
    }
}

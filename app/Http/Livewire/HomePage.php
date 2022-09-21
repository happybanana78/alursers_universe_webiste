<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $nftName;
    public $nftData = 0;

    public function search() {
        $found = false;
        // Set Path To Metadata Folder
        $path = public_path() . "/metadata/*";
        // Get The Crude Number Of The NFT From Form Data
        $nftNumber = explode("#", $this->nftName);
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
                    if ($this->nftName == $json["name"]) {
                        $found = true;
                        $this->nftData = $json["attributes"][6]["value"];
                        /*
                        return view("main", [
                            "data" => $json["attributes"][6]["value"]
                        ]);
                        */
                    }
                }
            }
        }
        if ($found == false) {
            return redirect("/")->with("found", "NFT Not Found!");                  
        }
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}

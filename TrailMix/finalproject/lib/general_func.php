<?php

    function toDisplayDate($date) {
        if($phpDate = strtotime($date)){
            return date('m/d/Y', $phpDate);
        }else {
            return "";
        }
    }

    function getTrailImagePathCard($trailID) {
        $trailImageDirectory = "../DataFiles/TrailImages";
        return $trailFilePath = "$trailImageDirectory/$trailID.jpg";
    }

    function checkTrailImagePathCard($trailID) {
        $trailFilePath = getTrailImagePathCard($trailID);
        if(is_file($trailFilePath)) {
            return $trailFilePath;
        } else {
            return "";
        }
    }
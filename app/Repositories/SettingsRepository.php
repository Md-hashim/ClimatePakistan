<?php

namespace App\Repositories;

use App\Interfaces\SettingsInterface;
use App\Models\Settings;


class SettingsRepository implements SettingsInterface
{
    public function getSettings()
    {
        // TODO: Implement getSettings() method.
        return Settings::first();
    }

    public function updateSiteSettings($id,$announcementImage=null,$announcementStatus=null,$announcementUrl=null, $tagLine = null, $phoneNumber = null, $emailAddress = null, $metaTitle = null, $metaDescription = null, $facebook = null, $instagram = null, $twitter = null, $linkedIn = null,$tiktok=null, $primaryColor = null, $secondaryColor = null, $textColor = null, $logoLarge = null, $logoSmall = null, $favIcon = null, $bannerImage = null, $videoUrl = null, $landingPageType = null, $footerSection1=null, $footerSection2=null,
    $womenEmpowered = null, $ourFollowers = null, $registeredChambers = null, $trainings = null, $youtube=null)
    {
        // TODO: Implement updateSiteSettings() method.
        $settings_update=Settings::where(['id'=>$id])->first();

        $settings_update->tag_line = $tagLine;

            $settings_update->phone_number = $phoneNumber;


            $settings_update->email_address = $emailAddress;
            $settings_update->footer_section_1 = $footerSection1;
            $settings_update->footer_section_2 = $footerSection2;

            $settings_update->meta_title = $metaTitle;


            $settings_update->meta_description = $metaDescription;


            $settings_update->facebook = $facebook;


            $settings_update->instagram = $instagram;


            $settings_update->twitter = $twitter;
            $settings_update->youtube = $youtube;


            $settings_update->linkedIn = $linkedIn;
            $settings_update->tiktok = $tiktok;

            $settings_update->women_empowered = $womenEmpowered;
            $settings_update->our_followers = $ourFollowers;
            $settings_update->registered_chambers = $registeredChambers;
            $settings_update->trainings = $trainings;
            $settings_update->announcement_status = $announcementStatus;
            $settings_update->announcement_url = $announcementUrl;

        if($announcementImage!=null){
            $settings_update->announcement_image = $announcementImage;
        }

        if($primaryColor!=null){
            $settings_update->primary_color = $primaryColor;
        }
        if($secondaryColor!=null){
            $settings_update->secondary_color = $secondaryColor;
        }
        if($textColor!=null){
            $settings_update->text_color = $textColor;
        }
        if($logoLarge!=null){
            $settings_update->logo_large = $logoLarge;
        }
        if($logoSmall!=null){
            $settings_update->logo_small = $logoSmall;
        }
        if($favIcon!=null){
            $settings_update->fav_icon = $favIcon;
        }
        if($bannerImage!=null){
            $settings_update->banner_image = $bannerImage;
        }

        if($videoUrl!=null)
        {
            $settings_update->video_url = $videoUrl;
        }




            $settings_update->landing_page_type = $landingPageType;

        $settings_update->save();
        return $settings_update;
    }
}

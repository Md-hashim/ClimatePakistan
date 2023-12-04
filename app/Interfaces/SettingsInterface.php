<?php

namespace App\Interfaces;

interface SettingsInterface
{
    public function getSettings();
    public function updateSiteSettings($id,$announcementImage=null,$announcementStatus=null,$announcementUrl=null,$tagLine=null,$phoneNumber=null,$emailAddress=null,$metaTitle=null,$metaDescription=null,$facebook=null,$instagram=null,$twitter=null,$linkedIn=null,$tiktok=null,$primaryColor=null,$secondaryColor=null
    ,$textColor=null,$logoLarge=null,$logoSmall=null,$favIcon=null,$bannerImage=null,$videoUrl=null,$landingPageType=null, $footerSection1=null, $footerSection2=null);
}

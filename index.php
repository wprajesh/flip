<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Flip Videos</title>
  <meta name="description" content="Flip Videos for Kids">
  <meta name="author" content="RajeshK">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="js/jquery-2.1.3.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

    <?php
$play_list = array(
  array("Junk"=>"<document>  <id>1001</id>  <playListId>1001</playListId>  <question>Where do beautiful butterflies come from?</question>  \n <description>Egg to Caterpillar to Chrysalis to beautiful Butterfly. Life is amazing and beautiful. Lets enjoy it!</description>
 <minAge>5</minAge>  <maxAge>8</maxAge>  <references>   <reference>ocWgSgMGxOc</reference>   <reference>-pHav-3QZkI</reference>   <reference>AMs3waaW75g</reference>   <reference>http://paulmirocha.com/wp/wp-content/uploads/2011/11/butterfly_lifecycle1.jpg</reference>   <reference>http://www.exploringnature.org/graphics/butterfly_cycle_color.jpg</reference>   <reference>http://www.thunderboltkids.co.za/Grade5/01-life-and-living/images/gd-0138.png</reference>   <reference>s6R5cn3DQ_o</reference>
 </references>
</document>","PlayListId"=>1001,"Topic"=>"Lifecycle","Question"=>"Where do beautiful butterflies come from?","Description"=>"Egg to Caterpillar to Chrysalis to beautiful Butterfly. Life is amazing and beautiful. Lets enjoy it!","Min Age"=>5,"Max Age"=>8,"URL1"=>"ocWgSgMGxOc","URL2"=>"-pHav-3QZkI","URL3"=>"AMs3waaW75g","URL4"=>"http://paulmirocha.com/wp/wp-content/uploads/2011/11/butterfly_lifecycle1.jpg","URL5"=>"http://www.exploringnature.org/graphics/butterfly_cycle_color.jpg","URL6"=>"http://www.thunderboltkids.co.za/Grade5/01-life-and-living/images/gd-0138.png","URL7"=>"s6R5cn3DQ_o","URL8"=>null),
  array("Junk"=>"<document>  <id>1002</id>  <playListId>1002</playListId>  <question>uses of plants </question>  \n <description>aaabbbccc</description>
 <minAge>8</minAge>  <maxAge>10</maxAge>  <references>   <reference>Czoyzw2G3xo</reference>   <reference>nP3A7kM0hf0</reference>   <reference>http://image.slidesharecdn.com/evsiiirdplantsaroundus-140729100322-phpapp02/95/environmental-science-evs-plants-around-us-class-iii-7-638.jpg?cb=1406628252</reference>   <reference>Dv6s9A7JMGI</reference>   <reference>http://image.slidesharecdn.com/evsplantsworksheet-130904225531-/95/environmental-science-evs-plants-worksheet-class-ii-3-638.jpg?cb=1407000117</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1002,"Topic"=>"Plants","Question"=>"uses of plants ","Description"=>"aaabbbccc","Min Age"=>8,"Max Age"=>10,"URL1"=>"Czoyzw2G3xo","URL2"=>"nP3A7kM0hf0","URL3"=>"http://image.slidesharecdn.com/evsiiirdplantsaroundus-140729100322-phpapp02/95/environmental-science-evs-plants-around-us-class-iii-7-638.jpg?cb=1406628252","URL4"=>"Dv6s9A7JMGI","URL5"=>"http://image.slidesharecdn.com/evsplantsworksheet-130904225531-/95/environmental-science-evs-plants-worksheet-class-ii-3-638.jpg?cb=1407000117","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1003</id>  <playListId>1003</playListId>  <question>parts of plants</question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>uUH8iAanREY</reference>   <reference>l6FrqsvVS7k</reference>   <reference>CX2m2n2uDAE</reference>   <reference>http://tx.english-ch.com/teacher/jocelyn/parts%20of%20plant.jpg</reference>   <reference>http://image.shutterstock.com/display_pic_with_logo/1248838/212615377/stock-photo-illustration-showing-the-parts-of-a-tomato-plant-212615377.jpg</reference>   <reference>X6TLFZUC9gI</reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1003,"Topic"=>"Plants","Question"=>"parts of plants","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"uUH8iAanREY","URL2"=>"l6FrqsvVS7k","URL3"=>"CX2m2n2uDAE","URL4"=>"http://tx.english-ch.com/teacher/jocelyn/parts%20of%20plant.jpg","URL5"=>"http://image.shutterstock.com/display_pic_with_logo/1248838/212615377/stock-photo-illustration-showing-the-parts-of-a-tomato-plant-212615377.jpg","URL6"=>"X6TLFZUC9gI","URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1004</id>  <playListId>1004</playListId>  <question>kinds of plants </question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>s-NkOzFUMy0</reference>   <reference>LW0jUbKcn1I</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1004,"Topic"=>"Plants","Question"=>"kinds of plants ","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"s-NkOzFUMy0","URL2"=>"LW0jUbKcn1I","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1005</id>  <playListId>1005</playListId>  <question>photosynthesis </question>  \n <description>aaabbbccc</description>
 <minAge>7</minAge>  <maxAge>10</maxAge>  <references>   <reference>bPAujyos3UI</reference>   <reference>O9xWCsL-AdU</reference>   <reference>SJxRURFkfOw</reference>   <reference>http://www.leslienettling.com/photosynthesis2.gif</reference>   <reference>https://mycyberwall.co.za/sites/default/files/content/science_grade5/Photosynthesis-01_0.jpg</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1005,"Topic"=>"Plants","Question"=>"photosynthesis ","Description"=>"aaabbbccc","Min Age"=>7,"Max Age"=>10,"URL1"=>"bPAujyos3UI","URL2"=>"O9xWCsL-AdU","URL3"=>"SJxRURFkfOw","URL4"=>"http://www.leslienettling.com/photosynthesis2.gif","URL5"=>"https://mycyberwall.co.za/sites/default/files/content/science_grade5/Photosynthesis-01_0.jpg","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1006</id>  <playListId>1006</playListId>  <question>uses of animals</question>  \n <description>aaabbbccc</description>
 <minAge>5</minAge>  <maxAge>8</maxAge>  <references>   <reference>tKH2APH0hHU</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1006,"Topic"=>"Animals","Question"=>"uses of animals","Description"=>"aaabbbccc","Min Age"=>5,"Max Age"=>8,"URL1"=>"tKH2APH0hHU","URL2"=>"","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1007</id>  <playListId>1007</playListId>  <question>Where animals live</question>  \n <description>aaabbbccc</description>
 <minAge>5</minAge>  <maxAge>8</maxAge>  <references>   <reference>xx0_MvlseBc</reference>   <reference>MsoUZzGtoOs</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1007,"Topic"=>"Animals","Question"=>"Where animals live","Description"=>"aaabbbccc","Min Age"=>5,"Max Age"=>8,"URL1"=>"xx0_MvlseBc","URL2"=>"MsoUZzGtoOs","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1008</id>  <playListId>1008</playListId>  <question> animal adaptations</question>  \n <description>aaabbbccc</description>
 <minAge>7</minAge>  <maxAge>10</maxAge>  <references>   <reference>fRX2JtKFUzk</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1008,"Topic"=>"Animals","Question"=>" animal adaptations","Description"=>"aaabbbccc","Min Age"=>7,"Max Age"=>10,"URL1"=>"fRX2JtKFUzk","URL2"=>"","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1009</id>  <playListId>1009</playListId>  <question> vertebrates and Invertebrates</question>  \n <description>aaabbbccc</description>
 <minAge>7</minAge>  <maxAge>10</maxAge>  <references>   <reference>8wT5dihdt4E</reference>   <reference>7ls7ds5Aqi4</reference>   <reference>-X07ApgAzy8</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1009,"Topic"=>"Animals","Question"=>" vertebrates and Invertebrates","Description"=>"aaabbbccc","Min Age"=>7,"Max Age"=>10,"URL1"=>"8wT5dihdt4E","URL2"=>"7ls7ds5Aqi4","URL3"=>"-X07ApgAzy8","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1010</id>  <playListId>1010</playListId>  <question>What are functions of teeth</question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>Fsqki4EwIdM</reference>   <reference>Fsqki4EwIdM</reference>   <reference>s6tdiDDpxkQ</reference>   <reference>https://dr282zn36sxxg.cloudfront.net/datastreams/f-d%3A61b8036a9dd5c46ac29787171a1b8de1dfa7294ed3f95c1b05ec155a%2BIMAGE_THUMB_POSTCARD%2BIMAGE_THUMB_POSTCARD.1</reference>   <reference>http://image.slidesharecdn.com/teeth-110820193600-phpapp02/95/10-teeth-2-728.jpg?cb=1313870342</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1010,"Topic"=>"Teeth","Question"=>"What are functions of teeth","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"Fsqki4EwIdM","URL2"=>"Fsqki4EwIdM","URL3"=>"s6tdiDDpxkQ","URL4"=>"https://dr282zn36sxxg.cloudfront.net/datastreams/f-d%3A61b8036a9dd5c46ac29787171a1b8de1dfa7294ed3f95c1b05ec155a%2BIMAGE_THUMB_POSTCARD%2BIMAGE_THUMB_POSTCARD.1","URL5"=>"http://image.slidesharecdn.com/teeth-110820193600-phpapp02/95/10-teeth-2-728.jpg?cb=1313870342","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1011</id>  <playListId>1011</playListId>  <question>How food digests in our body</question>  \n <description>aaabbbccc</description>
 <minAge>5</minAge>  <maxAge>10</maxAge>  <references>   <reference>ZeUlh9Cou38</reference>   <reference>kurlbBqUI2g</reference>   <reference>_EtTWXQ5BiA</reference>   <reference>https://jumpshare.com/v/Bb7g4XznZjdZCMPtFrrs?b=k3h8LtAzk6p1Z4rwEfEK</reference>   <reference>https://jumpshare.com/v/cci6jcK70TEeSlumt9Gb?b=k3h8LtAzk6p1Z4rwEfEK</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1011,"Topic"=>"Digestion","Question"=>"How food digests in our body","Description"=>"aaabbbccc","Min Age"=>5,"Max Age"=>10,"URL1"=>"ZeUlh9Cou38","URL2"=>"kurlbBqUI2g","URL3"=>"_EtTWXQ5BiA","URL4"=>"https://jumpshare.com/v/Bb7g4XznZjdZCMPtFrrs?b=k3h8LtAzk6p1Z4rwEfEK","URL5"=>"https://jumpshare.com/v/cci6jcK70TEeSlumt9Gb?b=k3h8LtAzk6p1Z4rwEfEK","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1012</id>  <playListId>1012</playListId>  <question>What is a balance diet</question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>vV_DcnnPmX4</reference>   <reference></reference>   <reference></reference>   <reference>https://jumpshare.com/v/I2F6T79PM2ckjDouLxYc?b=5NBTKlnZDdAcaYSaFd9y</reference>   <reference>https://jumpshare.com/v/ey3Z6Am5xwrB4CSEEQSv?b=5NBTKlnZDdAcaYSaFd9y</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1012,"Topic"=>"Food","Question"=>"What is a balance diet","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"vV_DcnnPmX4","URL2"=>"","URL3"=>"","URL4"=>"https://jumpshare.com/v/I2F6T79PM2ckjDouLxYc?b=5NBTKlnZDdAcaYSaFd9y","URL5"=>"https://jumpshare.com/v/ey3Z6Am5xwrB4CSEEQSv?b=5NBTKlnZDdAcaYSaFd9y","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1013</id>  <playListId>1013</playListId>  <question>The food pyramid</question>  \n <description>aaabbbccc</description>
 <minAge>7</minAge>  <maxAge>10</maxAge>  <references>   <reference>hS8pb8lRBc4</reference>   <reference></reference>   <reference></reference>   <reference>https://jumpshare.com/v/pAsnJNZxMf7dPd7NVTtr?b=5NBTKlnZDdAcaYSaFd9y</reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1013,"Topic"=>"Food","Question"=>"The food pyramid","Description"=>"aaabbbccc","Min Age"=>7,"Max Age"=>10,"URL1"=>"hS8pb8lRBc4","URL2"=>"","URL3"=>"","URL4"=>"https://jumpshare.com/v/pAsnJNZxMf7dPd7NVTtr?b=5NBTKlnZDdAcaYSaFd9y","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1014</id>  <playListId>1014</playListId>  <question>what are satellites communication</question>  \n <description>aaabbbccc</description>
 <minAge>8</minAge>  <maxAge>10</maxAge>  <references>   <reference>hXa3bTcIGPU</reference>   <reference>jZbr4ssg7tY</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1014,"Topic"=>"Satellites ","Question"=>"what are satellites communication","Description"=>"aaabbbccc","Min Age"=>8,"Max Age"=>10,"URL1"=>"hXa3bTcIGPU","URL2"=>"jZbr4ssg7tY","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1015</id>  <playListId>1015</playListId>  <question>what are artificial satellites</question>  \n <description>aaabbbccc</description>
 <minAge>8</minAge>  <maxAge>10</maxAge>  <references>   <reference>http://www.csre.iitb.ac.in/isro/arya.jpg</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1015,"Topic"=>"Satellites ","Question"=>"what are artificial satellites","Description"=>"aaabbbccc","Min Age"=>8,"Max Age"=>10,"URL1"=>"http://www.csre.iitb.ac.in/isro/arya.jpg","URL2"=>"","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1016</id>  <playListId>1016</playListId>  <question>evaporation and condensation </question>  \n <description>aaabbbccc</description>
 <minAge>5</minAge>  <maxAge>10</maxAge>  <references>   <reference>76K_5SrYyM4</reference>   <reference>76K_5SrYyM4</reference>   <reference>VHW9GspGnYE</reference>   <reference>https://jumpshare.com/v/gEc1jALdf3k2VuLTF5fz?b=2qbzzRRocwsmR4sIXknV</reference>   <reference>https://jumpshare.com/v/d3Cgh5gLEUHIRpDW0BC0?b=2qbzzRRocwsmR4sIXknV</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1016,"Topic"=>"Watercycle ","Question"=>"evaporation and condensation ","Description"=>"aaabbbccc","Min Age"=>5,"Max Age"=>10,"URL1"=>"76K_5SrYyM4","URL2"=>"76K_5SrYyM4","URL3"=>"VHW9GspGnYE","URL4"=>"https://jumpshare.com/v/gEc1jALdf3k2VuLTF5fz?b=2qbzzRRocwsmR4sIXknV","URL5"=>"https://jumpshare.com/v/d3Cgh5gLEUHIRpDW0BC0?b=2qbzzRRocwsmR4sIXknV","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1017</id>  <playListId>1017</playListId>  <question>how does rain comes</question>  \n <description>aaabbbccc</description>
 <minAge>7</minAge>  <maxAge>10</maxAge>  <references>   <reference>ncORPosDrjI</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1017,"Topic"=>"Watercycle ","Question"=>"how does rain comes","Description"=>"aaabbbccc","Min Age"=>7,"Max Age"=>10,"URL1"=>"ncORPosDrjI","URL2"=>"","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1018</id>  <playListId>1018</playListId>  <question>what is energy</question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>NKJifzlOSoQ</reference>   <reference>http://easyscienceforkids.com/wp-content/uploads/2013/06/what_is_energy.jpg</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1018,"Topic"=>"Energy","Question"=>"what is energy","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"NKJifzlOSoQ","URL2"=>"http://easyscienceforkids.com/wp-content/uploads/2013/06/what_is_energy.jpg","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1019</id>  <playListId>1019</playListId>  <question>what are sources of energy</question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>wMOpMka6PJI</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1019,"Topic"=>"Energy","Question"=>"what are sources of energy","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"wMOpMka6PJI","URL2"=>"","URL3"=>"","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1020</id>  <playListId>1020</playListId>  <question>Renewable   and non renewable  sources of energy </question>  \n <description>aaabbbccc</description>
 <minAge>6</minAge>  <maxAge>10</maxAge>  <references>   <reference>pBTnVoEIb98</reference>   <reference>http://www.english-online.at/geography/energy/renewable-non-renewable-form-of-energy.gif</reference>   <reference>http://www.swiftutors.com/science/images/non-renewable-energy-sources.jpg</reference>   <reference></reference>   <reference></reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1020,"Topic"=>"Energy","Question"=>"Renewable   and non renewable  sources of energy ","Description"=>"aaabbbccc","Min Age"=>6,"Max Age"=>10,"URL1"=>"pBTnVoEIb98","URL2"=>"http://www.english-online.at/geography/energy/renewable-non-renewable-form-of-energy.gif","URL3"=>"http://www.swiftutors.com/science/images/non-renewable-energy-sources.jpg","URL4"=>"","URL5"=>"","URL6"=>null,"URL7"=>null,"URL8"=>null),
  array("Junk"=>"<document>  <id>1021</id>  <playListId>1021</playListId>  <question>what is water sedementation and decantation  filteration</question>  \n <description>aaabbbccc</description>
 <minAge>8</minAge>  <maxAge>10</maxAge>  <references>   <reference>sBCLafMPVt8</reference>   <reference>LHN9pCUR-uI</reference>   <reference>http://images.tutorvista.com/content/matter-around-pure/matter-sedimentation.jpeg</reference>   <reference>http://image.wistatutor.com/content/feed/u909/untitled2_1.JPG</reference>   <reference>http://biologyproductsr.weebly.com/uploads/1/3/4/3/13438236/1681978_orig.png</reference>   <reference></reference>   <reference></reference>
 </references>
</document>","PlayListId"=>1021,"Topic"=>"Filteration","Question"=>"what is water sedementation and decantation  filteration","Description"=>"aaabbbccc","Min Age"=>8,"Max Age"=>10,"URL1"=>"sBCLafMPVt8","URL2"=>"LHN9pCUR-uI","URL3"=>"http://images.tutorvista.com/content/matter-around-pure/matter-sedimentation.jpeg","URL4"=>"http://image.wistatutor.com/content/feed/u909/untitled2_1.JPG","URL5"=>"http://biologyproductsr.weebly.com/uploads/1/3/4/3/13438236/1681978_orig.png","URL6"=>null,"URL7"=>null,"URL8"=>null)
);
//var_dump($play_list);
function strposa($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = strpos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}

$image_ex_list = array('.png','.jpg','.gif');
$req_plist = (isset($_GET['plist'])) ? $_GET['plist'] : '1001';
$out = '';
?>

    <div id="main_top">
<div id="menu"><ul>
<li>Home</li>
<li>Add Child</li>
<li>Favourites</li>
</ul>
</div>
<div id="men_grid">
    <i class="fa fa-align-justify fa-2x"></i>
</div>
        <div id="search">
        <input id="searchty" type="text" value="" placeholder="SEARCH"/>
    </div>
    </div>
<div id="wrapper">
<div id="s_image">

</div>
</div>
    <div id="nav">
        <div id="prev">
            PREV
        </div>
        <div id="next">
            NEXT
        </div>
    </div>

  

  <script src="js/jquery.tubular.1.0.js"></script>
  
      <script type="text/javascript" >
    
        
        /* jQuery tubular plugin
|* by Sean McCambridge
|* http://www.seanmccambridge.com/tubular
|* version: 1.0
|* updated: October 1, 2012
|* since 2010
|* licensed under the MIT License
|* Enjoy.
|* 
|* Thanks,
|* Sean */

;(function ($, window) {

    // test for feature support and return if failure
    
    // defaults
    var defaults = {
        ratio: 16/9, // usually either 4/3 or 16/9 -- tweak as needed
        videoId: 'ZCAnLxRvNNc', // toy robot in space is a good default, no?
        mute: false,
        repeat: true,
        width: $(window).width(),
        wrapperZIndex: 99,
        playButtonClass: 'tubular-play',
        pauseButtonClass: 'tubular-pause',
        muteButtonClass: 'tubular-mute',
        volumeUpClass: 'tubular-volume-up',
        volumeDownClass: 'tubular-volume-down',
        increaseVolumeBy: 10,
        start: 0
    };

    // methods

    var tubular = function(node, options) { // should be called on the wrapper div
        var options = $.extend({}, defaults, options),
            $body = $('body') // cache body node
            $node = $(node); // cache wrapper node

        // build container
        var tubularContainer = '<div id="tubular-container" style="overflow: hidden; position: fixed; z-index: 1; width: 100%; height: 100%"><div id="tubular-player" style="position: absolute"></div></div><div id="tubular-shield" style="width: 100%; height: 100%; z-index: 2; position: absolute; left: 0; top: 0;"></div>';

        // set up css prereq's, inject tubular container and set up wrapper defaults
        $('html,body').css({'width': '100%', 'height': '100%'});
        $body.prepend(tubularContainer);
        $node.css({position: 'relative', 'z-index': options.wrapperZIndex});

        // set up iframe player, use global scope so YT api can talk
        window.player;
        window.onYouTubeIframeAPIReady = function() {
            player = new YT.Player('tubular-player', {
                width: options.width,
                height: Math.ceil(options.width / options.ratio),
                videoId: options.videoId,
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    modestbranding: 1,
                    wmode: 'transparent'
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        window.onPlayerReady = function(e) {
            resize();
            if (options.mute) e.target.mute();
            e.target.seekTo(options.start);
            e.target.playVideo();
        }

//        window.onPlayerStateChange = function(state) {
//            if (state.data === 0 ) { // video ended and repeat option is set true
//                //player.seekTo(options.start); // restart
//                
//            }
//        }

//function onPlayerStateChange(event) {        
//    if(event.data === 0) {  
//    console.log('event');          
//    player.cueVideoById('6YnVOsmfBQU');
//    player.playVideo();
//    }
//}

        // resize handler updates width, height and offset of player after resize/init
        var resize = function() {
            var width = $(window).width(),
                pWidth, // player width, to be defined
                height = $(window).height(),
                pHeight, // player height, tbd
                $tubularPlayer = $('#tubular-player');

            // when screen aspect ratio differs from video, video must center and underlay one dimension

            if (width / options.ratio < height) { // if new video height < window height (gap underneath)
                pWidth = Math.ceil(height * options.ratio); // get new player width
                $tubularPlayer.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); // player width is greater, offset left; reset top
            } else { // new video width < window width (gap to right)
                pHeight = Math.ceil(width / options.ratio); // get new player height
                $tubularPlayer.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); // player height is greater, offset top; reset left
            }

        }

        // events
        $(window).on('resize.tubular', function() {
            resize();
        })

        $('body').on('click','.' + options.playButtonClass, function(e) { // play button
            e.preventDefault();
            player.playVideo();
        }).on('click', '.' + options.pauseButtonClass, function(e) { // pause button
            e.preventDefault();
            player.pauseVideo();
        }).on('click', '.' + options.muteButtonClass, function(e) { // mute button
            e.preventDefault();
            (player.isMuted()) ? player.unMute() : player.mute();
        }).on('click', '.' + options.volumeDownClass, function(e) { // volume down button
            e.preventDefault();
            var currentVolume = player.getVolume();
            if (currentVolume < options.increaseVolumeBy) currentVolume = options.increaseVolumeBy;
            player.setVolume(currentVolume - options.increaseVolumeBy);
        }).on('click', '.' + options.volumeUpClass, function(e) { // volume up button
            e.preventDefault();
            if (player.isMuted()) player.unMute(); // if mute is on, unmute
            var currentVolume = player.getVolume();
            if (currentVolume > 100 - options.increaseVolumeBy) currentVolume = 100 - options.increaseVolumeBy;
            player.setVolume(currentVolume + options.increaseVolumeBy);
        })
    }

    // load yt iframe js api

    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // create plugin

    $.fn.tubular = function (options) {
        return this.each(function () {
            if (!$.data(this, 'tubular_instantiated')) { // let's only run one
                $.data(this, 'tubular_instantiated', 
                tubular(this, options));
            }
        });
    }
    
    
    
    
      var play_list = [    <?php
foreach($play_list as $key => $list){
 
  $play_list_id = $list['PlayListId'];

  if($play_list_id == $req_plist){

  for($i=1;$i<=10;$i++){
    if(isset($list["URL".$i])){
       $current_url = $list["URL".$i];
       if (strposa($current_url, $image_ex_list)) {
       $out = $out."{'type':'img','img_url':'".$current_url."','question':'".$list['Question']."'}";
      //if(isset($list["URL".$i+1])){
          $out = $out.',';
      //}
       }else{
      $out = $out."{'type':'video','video_id':'".$current_url."','question':'".$list['Question']."'}";  
      
      //if(isset($list["URL".$i+1])){
          $out = $out.',';
     // }
       }
      
    }
  }
}
}
echo rtrim($out, ",");
?>];
  
  
  
  
  
      var play_list_seq = [0,1,2,3];

    function nextItem(num) { 
  return play_list[($.inArray(num, play_list) + 1) % play_list.length]; 
}
function prevItem(num) { 
  return play_list[($.inArray(num, play_list) - 1 + play_list.length) % play_list.length];
}  
var current = "0Bmhjf0rKe8";
var Ninterval = {interval:[]};
current = nextItem(current);

  // when video ends
function onPlayerStateChange(event) {        
    if(event.data === 0) {  
    console.log('event');
    current = nextItem(current);
    console.log(current);
    if(current.type == 'video'){
        
      console.log(current.video_id);
player.cueVideoById(current.video_id);
player.playVideo();
    }else{
      show_image();
    }
    // next = nextItem(next);
   // console.log(next);          
   // player.cueVideoById('6YnVOsmfBQU');
   // player.playVideo();
    }
}


function show_image(){
  $('#tubular-container').hide();
  var current_img_url = current.img_url;
  var img = '<img src="'+current_img_url+' " />';
  $('#s_image').html(img);
  $('#s_image').show();
  Ninterval.interval.push(
   setInterval(function(){

check_type_play(); 
},4000)
);
    $("#searchty").val(current.question);
}


function check_type_play(){
current = nextItem(current);
    for (var i=0; i < Ninterval.interval.length; i++) {
        clearInterval(Ninterval.interval[i]);
    }
    if(current.type == 'video'){
       // clearInterval(Ninterval.interval);
        $('#tubular-container').show();
        $('#s_image').hide();
      console.log(current.video_id);
player.cueVideoById(current.video_id);
player.playVideo();
    }else{
      show_image();
    }
    
    $("#searchty").val(current.question);
}

$("#prev").click(function(){
    current = prevItem(current);
    for (var i=0; i < Ninterval.interval.length; i++) {
        clearInterval(Ninterval.interval[i]);
    }
    if(current.type == 'video'){
       // console.log(Ninterval.interval);
       // clearInterval(Ninterval.interval);
        $('#tubular-container').show();
        $('#s_image').hide();
      console.log(current.video_id);
player.cueVideoById(current.video_id);
player.playVideo();
    }else{
       // clearInterval(Ninterval.interval);
      show_image();
    }
    $("#searchty").val(current.question);
});

$("#next").click(function(){
    current = nextItem(current);
        for (var i=0; i < Ninterval.interval.length; i++) {
        clearInterval(Ninterval.interval[i]);
    }
    if(current.type == 'video'){
        //console.log(Ninterval.interval);
       // clearInterval(Ninterval.interval);
        $('#tubular-container').show();
        $('#s_image').hide();
      console.log(current.video_id);
player.cueVideoById(current.video_id);
player.playVideo();
    }else{
       // clearInterval(Ninterval.interval);
      show_image();
    }
    $("#searchty").val(current.question);
});


  $(document).ready(function(){

    



$('#wrapper').tubular({videoId: play_list[0].video_id});


$("#searchty").val(current.question);

$("#men_grid").click(function(){
   if($('#menu').css('left') == '0px'){
       $('#menu').css('left','-100%'); 
   } else{
      $('#menu').css('left','0px');  
   }
   
});

/*setInterval(function(){

       current = nextItem(current);
    console.log(current);  
},3000);
*/
  });

})(jQuery, window);
    
    </script>
  <script type="text/javascript">

  </script>
</body>
</html>
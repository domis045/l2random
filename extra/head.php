<head>
<title><?php echo $title ?></title>
<link rel="shortcut icon" href="display/images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="display/css/style.css" type="text/css" />
<link rel="stylesheet" href="display/css/reset.css" type="text/css" />
<link rel="stylesheet" href="http://fonts.ncwest.ncsoft.com/adelon/fontsc619.css?v=1.0">
<script type='text/javascript' src="display/js/jquery.js"></script>
<script type='text/javascript' src="display/js/jquery.ui.js"></script>
<script type='text/javascript' src="display/js/scripts.js"></script>
<script type='text/javascript' src="display/js/script.js"></script>
<script type='text/javascript' src="display/js/tabs.js"></script>
<script type="text/javascript"> 
    jQuery(function($){
    $('body').css({backgroundColor: "#0f0e12"});
    var totalCount = 8;
    var num = Math.ceil( Math.random() * totalCount );
    function setBGImage() {
        var bgimage = 'display/images/bg/'+num+'.jpg';
        $('body').css(
        {
        backgroundImage:"url("+bgimage+")",
        backgroundRepeat: "no-repeat",
		backgroundPosition: "center top"
        });
    }
    setBGImage();
    });
</script>
</head>
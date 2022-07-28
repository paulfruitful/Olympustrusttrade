<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DHP {{ucwords(str_replace("/", " ", Request::path())) }} - Diamond Hub Plus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.jpg">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- adminpro icon CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- jvectormap CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- charts CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/charts.css">
    <link rel="stylesheet" href="/css/c3.min.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jquery ============================================ -->
    <script src="/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- meanmenu JS =========================================== -->
    <script src="/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS  ============================================ -->
    <script src="/js/jquery.sticky.js"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <!-- scrollUp JS ============================================ -->

    <!-- chart JS ============================================ -->
    <!-- <link rel="stylesheet" href="/chartjs280/dist/Chart.min.css"> -->
    <link rel="stylesheet" href="/chatjs/chartjs/dist/Chart.css">
    <script src="/chatjs/chartjs/dist/Chart.js"></script>
    <script src="/chatjs/moment/moment.js"></script>
    <!-- <script src="/chartjs280/dist/Chart.min.js"></script> -->
    
    <!-- chart JS ============================================ -->

    <!-- tinymce -->
    <script src="/tinymce5/jquery.tinymce.min.js"></script>
    <script src="/tinymce5/tinymce.min.js"></script>

    <!-- tinymce -->
    

    <script>
          tinymce.init({
            selector: '#textmsg',

            setup: function (editor1) {
                editor1.on('change', function () {
                    editor1.save();
                });
            },
            
              plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
              ],
              // toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
              // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
              image_advtab: true,
          });
    </script>
</head>
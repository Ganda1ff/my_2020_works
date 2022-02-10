<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta char <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>МЕМЫЫЫЫЫЫЫЫЫЫЫЫЪЪЪЪЪ</title>
    <style>
        .logo1 {
            position: absolute;
            margin: 65px 0 0 260px;
            margin-top: 20px;
            z-index: 100;
        }
        
        body {
            background-image: url(https://avatars.mds.yandex.net/get-pdb/936467/834d31e4-e867-4155-900c-cd6cab54cc3b/s1200?webp=false);
            text-align: center;
            margin-left: 325px;
            margin-top: 10px;
        }
        
        input[type='button'] {
            color: white;
            padding: 9px;
            border-radius: 9px;
            background-color: black;
            margin-bottom: 15px;
            margin-right: 275px;
            margin-top: 60px;
        }
        
        input[type='button']:focus,
        input[type='button']:active {
            outline: none;
        }
        
        img {
            width: inherit;
        }
        
        #meme {
            width: 650px;
            padding: 6px;
            border: 3px solid gray;
        }
        
        #user {
            color: slategray;
            text-align: right;
            margin-right: 5px;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: absolute;
            border: #fff;
            border: 1px;
        }
        
        li {
            display: inline-block;
            float: left;
            margin-right: 1px;
        }
        
        li a {
            display: block;
            min-width: 140px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #fff;
            background: #2f3036;
            text-decoration: none;
        }
        
        li:hover a {
            background: #19c589;
        }
        
        li:hover ul a {
            background: #f3f3f3;
            color: #2f3036;
            height: 40px;
            line-height: 40px;
        }
        
        li:hover ul a:hover {
            background: #19c589;
            color: #fff;
        }
        
        li ul {
            display: none;
        }
        
        li ul li {
            display: block;
            float: none;
        }
        
        li ul li a {
            width: auto;
            min-width: 100px;
            padding: 0 20px;
        }
        
        ul li a:hover+.hidden,
        .hidden:hover {
            display: block;
        }
    </style>
</head>

<body onload="start()">
    <div id="header">
        <div class="logo1">
            <a href="file:///C:/Users/%D0%9F%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C/Documents/39.htm">
                <img src="https://avatanplus.com/files/resources/mid/589384918041715a003dd875.png" width="450" height="150" />
            </a>
        </div>
    </div>
    <ul id="menu">
        <li><a href="file:///C:/Users/%D0%9F%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C/Documents/39.htm">Главная</a></li>
        <li><a href="#">Новости в мемах</a></li>
        <li><a href="#">Контакты</a></li>
        <li>
            <a href="#">Больше мемовъъ </a>
            <ul class="hidden">
                <li><a href="#">Мемы на русском</a></li>
                <li><a href="#">Интеллектуальные мемы</a></li>
                <li><a href="#">Мемы для деградации</a></li>
            </uL>
        </li>
        <li>
            <a href="#">Обсуждение</a>
            <ul class="hidden">
                <li><a href="#">Вип-Чат</a></li>
            </ul>
        </li>
    </ul>
    <script>
        var memes = 100,
            num_meme;
        var meme = ["https://cs.pikabu.ru/post_img/2013/10/03/10/1380812973_1827676361.png", "https://cs3.pikabu.ru/post_img/big/2014/03/27/0/1395866501_1863579413.jpg", "https://cs2.pikabu.ru/post_img2/2014/01/30/7/1391076659_1199197719.jpg",
                "https://cs7.pikabu.ru/post_img/2014/08/12/5/1407822476_1908349270.jpg", "https://pbs.twimg.com/media/Ds2PmO_WkAEPMDY.jpg", "https://secure.diary.ru/userdir/2/5/7/0/257011/59071059.png", "https://hsto.org/getpro/tmtm/articles/tld/images/6616163/tild6663-3638-4732-b138-303338343966__EPAM_9.jpg",
                "https://i.pinimg.com/736x/63/1c/ba/631cba2f7f238ed0bb5677358a96ec78.jpg", "https://sun9-27.userapi.com/c858232/v858232765/11c842/AKlvGtB_YBs.jpg", "https://pbs.twimg.com/media/C6Bvl0cWYAQa909.jpg:large", "https://i.stack.imgur.com/YSCQn.jpg?s=328&g=1",
                "https://cs5.pikabu.ru/post_img/big/2014/10/15/0/1413316900_1992796934.jpg", "https://sun9-60.userapi.com/c855228/v855228521/966fd/h301xh05Q1I.jpg", "https://cs.pikabu.ru/post_img/2013/10/03/11/1380823685_1595076650.jpg", "https://pbs.twimg.com/media/DeGUhRwX4AAXS4x.jpg:large",
                "https://pbs.twimg.com/media/DhpiiRHXUAAvGXp.jpg:large", "https://sun9-48.userapi.com/c9792/u1289152/-14/x_27446b35.jpg", "https://demotivatorium.ru/sstorage/3/2012/07/1207121129469298.jpg", "https://cs5.pikabu.ru/post_img/2014/04/26/8/1398514710_710275784.jpg",
                "https://cs4.pikabu.ru/post_img/big/2014/11/24/7/1416828625_1762313403.jpg", "https://sun9-32.userapi.com/c831109/v831109748/187dd9/-_U6Mp0tGCo.jpg", "https://m.demotyvacijos.tv3.lt/media/demotivators/croped/demotyvacija.lt_Tu-gi-programuotojas-pataisyk_155471370368.jpg",
                "https://techtalk.vn/wp-content/uploads/2017/07/coder-love-2-1.jpg", "https://cs4.pikabu.ru/post_img/2014/03/25/1/1395694900_809219867.jpg", "https://pbs.twimg.com/media/DoaCdlfXcAA40EI.jpg:large", "https://image.ibb.co/cPWf6m/Computer_Meme_26.png",
                "https://image.ibb.co/kv8hK6/Computer_Meme_27.jpg", "https://image.ibb.co/jWH9z6/Computer_Meme_28.jpg", "https://image.ibb.co/nB57mm/Computer_Meme_29.jpg", "https://image.ibb.co/hbCWCR/Computer_Meme_30.jpg", "https://image.ibb.co/eOotRm/Computer_Meme_31.jpg",
                "https://image.ibb.co/dmMrCR/Computer_Meme_32.jpg", "https://image.ibb.co/gkRDRm/Computer_Meme_33.jpg", "https://image.ibb.co/mpgf6m/Computer_Meme_34.jpg", "https://image.ibb.co/eWNnmm/Computer_Meme_35.jpg", "https://image.ibb.co/eRyhK6/Computer_Meme_36.jpg",
                "https://image.ibb.co/exdSmm/Computer_Meme_37.jpg", "https://image.ibb.co/i5AUz6/Computer_Meme_38.jpg", "https://image.ibb.co/f1XysR/Computer_Meme_39.jpg", "https://image.ibb.co/fe9NK6/Computer_Meme_40.jpg", "https://image.ibb.co/ghj06m/Computer_Meme_41.jpg",
                "https://preview.ibb.co/jpE06m/Computer_Meme_42.jpg", "https://image.ibb.co/b1xnmm/Computer_Meme_43.jpg", "https://image.ibb.co/nEYSmm/Computer_Meme_44.jpg", "https://preview.ibb.co/nnY4XR/Computer_Meme_45.jpg", "https://preview.ibb.co/cwtXK6/Computer_Meme_46.jpg",
                "https://image.ibb.co/ekXEXR/Computer_Meme_47.png", "https://image.ibb.co/j3NgCR/Computer_Meme_48.jpg", "https://image.ibb.co/hxuiRm/Computer_Meme_49.jpg", "https://image.ibb.co/mrm8sR/Computer_Meme_50.jpg", "https://image.ibb.co/jZOosR/Computer_Meme_51.jpg",
                "https://image.ibb.co/cWXRe6/Computer_Meme_52.jpg", "https://image.ibb.co/eXzHmm/Computer_Meme_53.jpg", "https://image.ibb.co/eiSEXR/Computer_Meme_54.jpg", "https://image.ibb.co/k8iosR/Computer_Meme_55.jpg", "https://image.ibb.co/mE4Hmm/Computer_Meme_56.jpg",
                "https://image.ibb.co/hGQ1CR/Computer_Meme_57.jpg", "https://image.ibb.co/f30ORm/Computer_Meme_58.jpg", "https://image.ibb.co/inaCK6/Computer_Meme_59.jpg", "https://preview.ibb.co/eETMCR/Computer_Meme_60.jpg", "https://image.ibb.co/dDWxmm/Computer_Meme_61.jpg",
                "https://preview.ibb.co/fsaCK6/Computer_Meme_62.jpg", "https://image.ibb.co/khdzz6/Computer_Meme_63.png", "https://image.ibb.co/eLsRe6/Computer_Meme_64.png", "https://image.ibb.co/jV8A6m/Computer_Meme_65.png", "https://image.ibb.co/dxOMCR/Computer_Meme_66.png",
                "https://image.ibb.co/gwP6e6/Computer_Meme_67.png", "https://preview.ibb.co/naDosR/Computer_Meme_68.jpg", "https://image.ibb.co/cuCgCR/Computer_Meme_69.jpg", "https://preview.ibb.co/bKTMCR/Computer_Meme_70.png", "https://image.ibb.co/iJSEXR/Computer_Meme_71.jpg",
                "https://image.ibb.co/ctVUz6/Computer_Meme_72.jpg", "https://image.ibb.co/cSSWCR/Computer_Meme_73.jpg", "https://image.ibb.co/mJP06m/Computer_Meme_74.jpg", "https://image.ibb.co/cPSysR/Computer_Meme_75.jpg", "https://image.ibb.co/eS84XR/Computer_Meme_76.jpg",
                "https://image.ibb.co/iYHbe6/Computer_Meme_77.jpg", "https://image.ibb.co/e2WDRm/Computer_Meme_78.png", "https://preview.ibb.co/nzb2K6/Computer_Meme_79.jpg", "https://image.ibb.co/kh6DRm/Computer_Meme_80.png", "https://image.ibb.co/isX9z6/Computer_Meme_81.jpg",
                "https://preview.ibb.co/dZ7WCR/Computer_Meme_82.jpg", "https://image.ibb.co/ewQUz6/Computer_Meme_83.jpg", "https://image.ibb.co/iLOSmm/Computer_Meme_84.jpg", "https://image.ibb.co/mCgDRm/Computer_Meme_85.jpg", "https://image.ibb.co/nbbPXR/Computer_Meme_86.jpg",
                "https://preview.ibb.co/khBrCR/Computer_Meme_87.jpg", "https://preview.ibb.co/bEhbe6/Computer_Meme_88.png", "https://preview.ibb.co/heOGe6/Computer_Meme_89.png", "https://preview.ibb.co/huyGe6/Computer_Meme_90.jpg", "https://preview.ibb.co/bY4dsR/Computer_Meme_91.jpg",
                "https://preview.ibb.co/kCajXR/Computer_Meme_92.jpg", "https://image.ibb.co/eLZYRm/Computer_Meme_93.png", "https://image.ibb.co/hmLwe6/Computer_Meme_94.jpg", "https://preview.ibb.co/njKYRm/Computer_Meme_95.png", "https://image.ibb.co/iVoGe6/Computer_Meme_96.jpg",
                "https://image.ibb.co/iethK6/Computer_Meme_97.jpg", "https://preview.ibb.co/b7uBCR/Computer_Meme_98.jpg", "https://preview.ibb.co/c6PdsR/Computer_Meme_99.png", "https://image.ibb.co/egJ4XR/Computer_Meme_100.jpg"
            ],
            user = [];

        for (var users = 0; users < 100; users++)
            user[users] = "Krishna Teja Yeluripati";

        function start() {
            num_meme = 0;
            document.getElementById("meme").innerHTML = "<div id='alt_meme'>Loading...</div><img onload='document.getElementById(\"alt_meme\").style.display = \"none\";' src='" + meme[num_meme] + "'/>";

            if (user[num_meme] === "Krishna Teja Yeluripati")
                document.getElementById("user").innerHTML = "";
            else
                document.getElementById("user").innerHTML = "Submitted By " + "<b><i>" + user[num_meme] + "</i></b>";
        }

        function next_meme() {
            if (num_meme > 0)
                num_meme--;
            else
                num_meme = memes - 1;

            document.getElementById("meme").innerHTML = "<div id='alt_meme'>Loading...</div><img onload='document.getElementById(\"alt_meme\").style.display = \"none\";' src='" + meme[num_meme] + "'/>";

            if (user[num_meme] === "Krishna Teja Yeluripati")
                document.getElementById("user").innerHTML = "";
            else
                document.getElementById("user").innerHTML = "Submitted By " + "<b><i>" + user[num_meme] + "</i></b>";
        }

        function prev_meme() {
            if (num_meme < memes - 1)
                num_meme++;
            else
                num_meme = 0;

            document.getElementById("meme").innerHTML = "<div id='alt_meme'>Loading...</div><img onload='document.getElementById(\"alt_meme\").style.display = \"none\";' src='" + meme[num_meme] + "'/>";

            if (user[num_meme] === "Krishna Teja Yeluripati")
                document.getElementById("user").innerHTML = "";
            else
                document.getElementById("user").innerHTML = "Submitted By " + "<b><i>" + user[num_meme] + "</i></b>";
        }
    </script>
    <form align="center"><input type="button" id="prev" value="Предыдущий мем" onclick="prev_meme()" /><input type="button" id="next" value=" Следующий мем" onclick="next_meme()" /></form>
    <div id="meme"></div>
    <div id="user"></div>
</body>
<form align="center"><input type="button" id="prev" value="Предыдущий мем" onclick="prev_meme()" /><input type="button" id="next" value=" Следующий мем" onclick="next_meme()" /></form>
    <div id="meme"></div>
    <div id="user"></div>
</html>
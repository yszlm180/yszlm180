<?php
$id = isset($_GET['id']) ? $_GET['id'] : 'cctv1hd';
$n = [
    "cctv1hd" => "120",
    "cctv2hd" => "121",
    "cctv3hd" => "122",
    "cctv4" => "182",
    "cctv5hd" => "123",
    "cctv5p" => "131",
    "cctv6hd" => "124",
    "cctv7hd" => "125",
    "cctv8hd" => "126",
    "cctv9hd" => "127",
    "cctv10hd" => "128",
    "cctv11" => "011",
    "cctv12hd" => "129",
    "cctv13" => "013",
    "cctv14hd" => "130",
    "cctv15" => "015",
    "cctv16hd" => "297",
    "cctv17" => "292",
    "bqkj" => "076",
    "hjjc" => "077",
    "dyjc" => "080",
    "fyjc" => "079",
    "fyyy" => "096",
    "fyzq" => "078",
    "sjdl" => "081",
    "whjp" => "075",
    "wsjk" => "111",
    "fxzl" => "087",
    "lgs" => "089",
    "yggw" => "031",
    "sh" => "090",
    "cgtn" => "019",
    "cetv1" => "070",
    "cetv4" => "179",
    "chcgqdy" => "180",
    "chcdzdy" => "118",
    "chdzdy2" => "291",
    "chcjtyy" => "119",
    "chcjtyy2" => "290",
    "bjwshd" => "139",
    "dfwshd" => "135",
    "tjwshd" => "134",
    "cqwshd" => "152",
    "hljwshd" => "138",
    "jlwshd" => "293",
    "lnwshd" => "145",
    "nmws" => "055",
    "nxws" => "074",
    "gsws" => "062",
    "qhws" => "050",
    "hbwshd" => "164",
    "sxiwshd" => "133",
    "sdwshd" => "143",
    "ahwshd" => "132",
    "hubwshd" => "144",
    "hunwshd" => "140",
    "jxwshd" => "150",
    "jswshd" => "141",
    "zjwshd" => "142",
    "dnws" => "071",
    "gdws" => "054",
    "szwshd" => "137",
    "gxws" => "056",
    "ynws" => "058",
    "gzws" => "046",
    "scwshd" => "154",
    "xjws" => "287",
    "btws" => "092",
    "xzws" => "053",
    "hinws" => "061",
    "kkse" => "069",
    "hqqg" => "088",
    "doxtv" => "114",
    "dsjc" => "105",
    "fztd" => "103",
    "jbtyhd" => "146",
    "jsqchd" => "153",
    "lyhd" => "147",
    "shss" => "110",
    "jsxt" => "109",
    "mlzqhd" => "148",
    "xfc" => "100",
    "qm" => "083",
    "jtlc" => "064",
    "yxjj" => "084",
    "wlqp" => "117",
    "sxggqy" => "187",
    "sxjjkj" => "022",
    "sxshfz" => "024",
    "sxwtsh" => "025",
    "sxys" => "023",
    "sxhh" => "026",
    "sxds" => "020",
    "yqxwzhhd" => "294",
    "yqkjhd" => "296",
    "sctx" => "059",
    "sdjy" => "063",
    "gxpd" => "066",
    "cpd" => "082",
    "jykt" => "068",
    "klcd" => "091",
    "xfpy" => "116",
    "cftx" => "112",
    "lz" => "072",
    "ymkt" => "067",
    "sypd" => "094",
];
$playurl = "http://httpdvb.slave.yqdtv.com:13164/playurl?programid=4200000" . $n[$id] . "&playtype=live&protocol=http&playtoken=31603YEQXREOPEG10&auth=no&verifycode=14183&accesstoken=G79E6023V21307D1TD05FABJB53102ABM786710FEI3282697DK98BDA6.m3u8";
header('Location:' . $playurl);
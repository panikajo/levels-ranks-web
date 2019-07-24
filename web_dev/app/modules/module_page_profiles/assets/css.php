<?php
/**
 * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */
?>
<style>
    .weapon-table th {
        padding: .35rem;
    }
    .weapon-table th img {
        max-width: 54px;
        max-height: 21px;
    }

    .middle-block .hitstats-block .hitstats .back{
        object-fit: cover;
    }

    .skull{
        filter: invert(70%) sepia(64%) saturate(4691%) hue-rotate(345deg) brightness(98%) contrast(91%);
    }

    .middle-block .hitstats-block .hit_player img{
        filter: brightness(40%);
    }

    .middle-block .hitstats-block .hit_player .hit_head:hover,
    .middle-block .hitstats-block .hit_player .hit_neak:hover,
    .middle-block .hitstats-block .hit_player .hit_chest:hover,
    .middle-block .hitstats-block .hit_player .hit_belly:hover,
    .middle-block .hitstats-block .hit_player .hit_left_arm:hover,
    .middle-block .hitstats-block .hit_player .hit_right_arm:hover,
    .middle-block .hitstats-block .hit_player .hit_left_leg:hover,
    .middle-block .hitstats-block .hit_player .hit_right_leg:hover{
        -webkit-filter: none;
        filter: none;
    }

    @media (max-width: 767.98px) {
        .left-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .right-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .profile__block{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .user-block{
            height: 350px;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 38%;
            flex: 0 0 38%;
            max-width: 38%;
        }

        .block{
            border: 0px solid transparent;
            border-radius: 4px;
            text-align: center;
            height:100%;
            width: 100%;
            overflow: hidden;
        }

        .user-block .block,
        .best-weapon-block .block,
        .best-maps .block ,
        .top .block,
        .unusualkills_block .block,
        .unusualkills_block_left .block{
            background-color: var(--sidebar-color);
        }

        .best-weapon-block{
            height: 350px;
            position: relative;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 62%;
            flex: 0 0 62%;
            max-width: 62%;
        }

        .user-block .avatar{
            margin-top: 18px;
            height: 110px;
            width: 110px;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .user-block .name{
            margin-top: 10px;
            font-size: 1em;
            font-weight: var(--font-weight-1);
            color: #F17A26;
        }

        .user-block .country{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }

        .user-block .rank-img {
            margin-top: 10px;
            width: 70px;
        }

        .user-block .rank {
            margin-top: 10px;
            font-size: 80%;
            font-weight: var(--font-weight-0);
            margin-bottom: 30px
        }

        .user-block .user-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #F17A26;
            text-align: center;
            padding-top: 7px;
            color: #ffffff;
            font-size: 17px;
            font-weight: var(--font-weight-3);
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .best-weapon-block .weapons{
            padding-top:18px;
            text-align: center;
            height: 86px;
        }

        .best-weapon-block .weapons .kills{
            margin-top: 5px;
            text-align: center;
            font-size: 15px;
            font-weight: var(--font-weight-3);
        }

        .best-weapon-block .weapons li{
            display: inline-block;
            padding-left: 3%;
            padding-right: 3%;
        }

        .best-weapon-block .weapons svg, .best-weapon-block .weapons img{
            width: 14vw;
            max-height: 4.8vw;
            filter:invert(var(--svg));
        }

        .best-weapon-block .weapon-table {
            height: 74%;
            overflow: auto;
        }

        .best-weapon-block .weapon-table svg, .best-weapon-block .weapon-table img{
            filter:invert(var(--svg));
        }

        .short-stats-block{
            margin-top: 6px;
            height: 264px;
            width:100%;
            padding: 18px;
            background-color: var(--sidebar-color);
            text-align: center;
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .short-stats-block .left-stats-block {
            float:left;
            width: 50%;
        }
        .short-stats-block .right-stats-block {
            margin-left: 50%;
            width: 50%;
        }
        .short-stats-block ul{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }
        .short-stats-block li{
            padding-bottom: 5px;
        }
        .short-stats-block .left-stats-block ul{
            text-align: left;
        }
        .short-stats-block .right-stats-block ul{
            text-align: right;
        }

        .skull-block {
            margin-top: 5%;
            width:100%;
            font-size: 14px;
            font-weight: var(--font-weight-0);
        }

        .skull-block .info{
            font-size: 12px;
            color: var(--default-text-color);
            font-weight: var(--font-weight-1);
        }

        .skull-block .left-skull-block {
            float: left;
            width: 27%;
            text-align: center
        }

        .skull-block .center-skull-block {
            display: inline-block;
            width: 39%;
            text-align: center
        }

        .skull-block .right-skull-block {
            float: right;
            width: 34%;
            text-align: center
        }

        .skull-block .left-skull-block .skull{
            display: inline-block;
            width: 62px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .center-skull-block .skull{
            display: inline-block;
            width: 82px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .right-skull-block .skull{
            display: inline-block;
            width: 102px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .middle-block .best-maps{
            height: 53vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 70%;
            flex: 0 0 70%;
            max-width: 70%;
        }

        .middle-block .best-maps .map-top{
            position: relative;
            height: 30%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block .best-maps .map-bottom{
            position: relative;
            overflow: auto;
            height: 70%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .map_block{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .map_block_right{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block .best-maps .map_block img, .middle-block .best-maps .map_block_right img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top .map-lower {
            position: absolute;
            max-width: 100%;
            margin-top: -33px;
        }

        .middle-block .best-maps .map-bottom .map-lower {
        }

        .middle-block .map-title-rounds .icon {
            margin-right: 0px;
        }
        .middle-block .map-title-rounds .icon img {
            filter: invert(var(--svg));
            margin-bottom: 4px;
            width: 10px;
        }

        .middle-block .best-maps .map-top .map-one {
            position: absolute;
            height: 28px;
            width: 25px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.75);
            padding-top: 1px;
            left: 7px;
        }
        .middle-block .best-maps .map-top .map-pretty-name {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: black;
            background-color: rgba(255, 255, 255, 0.75);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            left: 33px;
        }
        .middle-block .best-maps .map-top .map-title-rounds {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(241, 122, 38, 0.85);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            right: 7px;
        }

        .middle-block .hitstats-block{
            height: 53vw;
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 30%;
            flex: 0 0 30%;
            max-width: 30%;
        }

        .tooltip-top{
            position: absolute;
            width: 100%;
            height: 100%;
        }


        .back{
            width: 100%;
            height: 100%;
            border: 0px solid transparent;
            background-size: cover;
            border-radius: 4px;
        }

        .hit_player{
            position: absolute;
        }

        .hit_head{
            position: absolute;
            height:11vw;
            width:10vw;
            z-index: 101;
            bottom: 33.6vw;
            left: 10.2vw;
        }

        .hit_neak{
            position: absolute;
            height:3.5vw;
            width:7.6vw;
            z-index: 103;
            bottom: 33.6vw;
            left: 10.2vw;
        }

        .hit_left_arm{
            position: absolute;
            height:24vw;
            width:8vw;
            bottom: 24vw;
            left: 0.3vw;
            z-index: 101;
        }

        .hit_right_arm{
            position: absolute;
            height:23vw;
            width:6vw;
            bottom: 11.5vw;
            left: 20vw;
            z-index: 104;
        }

        .hit_chest{
            position: absolute;
            height:12vw;
            width: 15vw;
            bottom: 25.8vw;
            left: 6.3vw;
            z-index: 101;
        }

        .hit_belly{
            position: absolute;
            height:10vw;
            width: 16vw;
            bottom: 18.6vw;
            left: 6vw;
            z-index: 101;
        }

        .hit_left_leg{
            position: absolute;
            height:20vw;
            width: 8vw;
            bottom: 0;
            left: 7.5vw;
            z-index: 101;
        }

        .hit_right_leg{
            position: absolute;
            height:19.7vw;
            width: 11vw;
            bottom: 0;
            left: 13.8vw;
            z-index: 101;
        }

        .unusualkills_block{
            overflow: hidden;
            padding-top: 6px;
            padding-left: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .unusualkills_text{
            position: absolute;
            overflow-wrap:break-word;
            bottom:7px;
            left: 14px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 72%;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
        }

        .unusualkills_score {
            position: absolute;
            top:9px;
            left: 17px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 192%;
            font-weight: var(--font-weight-3);
            color: var(--span-color);
        }

        .unusualkills_block_left{
            overflow: hidden;
            padding-top: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .icon_block {
            position: absolute;
            right: 5px;
            top: 15px;
        }

        .unusualkills_block i, .unusualkills_block_left i {
            opacity: 0.3;
            font-size: 2em;
            text-align: center;
            color: var(--span-color);
        }

        .right-block .top{
            width:100%;
        }

        .right-block .top .table thead th {
            padding-top: 18px;
            font-size: 13px;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
            border-bottom: 2px solid var(--table-line);
        }
        .right-block .top .table tbody th {
            color: var(--default-text-color);
            font-size: 12px;
            font-weight: var(--font-weight-1);
            padding: .7em;
            border-bottom: none;
            border-top: 1px solid var(--hover);
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
        .left-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .right-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .profile__block{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .user-block{
            height: 42vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 38%;
            flex: 0 0 38%;
            max-width: 38%;
        }

        .block{
            border: 0px solid transparent;
            border-radius: 4px;
            text-align: center;
            height:100%;
            width: 100%;
            overflow: hidden;
        }

        .user-block .block,
        .best-weapon-block .block,
        .best-maps .block ,
        .top .block,
        .unusualkills_block .block,
        .unusualkills_block_left .block{
            background-color: var(--sidebar-color);
        }

        .best-weapon-block{
            height: 42vw;
            position: relative;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 62%;
            flex: 0 0 62%;
            max-width: 62%;
        }

        .user-block .avatar{
            margin-top: 18px;
            height: 110px;
            width: 110px;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .user-block .name{
            margin-top: 10px;
            font-size: 1.5em;
            font-weight: var(--font-weight-1);
            color: #F17A26;
        }

        .user-block .country{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }

        .user-block .rank-img {
            margin-top: 10px;
            width: 70px;
        }

        .user-block .rank {
            margin-top: 10px;
            font-size: 80%;
            font-weight: var(--font-weight-0);
            margin-bottom: 30px
        }

        .user-block .user-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #F17A26;
            text-align: center;
            padding-top: 7px;
            color: #ffffff;
            font-size: 17px;
            font-weight: var(--font-weight-3);
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .best-weapon-block .weapons{
            padding-top:18px;
            text-align: center;
            height: 26%;
        }

        .best-weapon-block .weapons .kills{
            margin-top: 5px;
            text-align: center;
            font-size: 15px;
            font-weight: var(--font-weight-3);
        }

        .best-weapon-block .weapons li{
            display: inline-block;
            padding-left: 3%;
            padding-right: 3%;
        }

        .best-weapon-block .weapons svg, .best-weapon-block .weapons img{
            width: 14vw;
            max-height: 4.8vw;
            filter:invert(var(--svg));
        }

        .best-weapon-block .weapon-table {
            height: 74%;
            overflow: auto;
        }

        .best-weapon-block .weapon-table svg, .best-weapon-block .weapon-table img{
            filter:invert(var(--svg));
        }

        .short-stats-block{
            margin-top: 6px;
            height: 264px;
            width:100%;
            padding: 18px;
            background-color: var(--sidebar-color);
            text-align: center;
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .short-stats-block .left-stats-block {
            float:left;
            width: 50%;
        }
        .short-stats-block .right-stats-block {
            margin-left: 50%;
            width: 50%;
        }
        .short-stats-block ul{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }
        .short-stats-block li{
            padding-bottom: 5px;
        }
        .short-stats-block .left-stats-block ul{
            text-align: left;
        }
        .short-stats-block .right-stats-block ul{
            text-align: right;
        }

        .skull-block {
            margin-top: 5%;
            width:100%;
            font-size: 14px;
            font-weight: var(--font-weight-0);
        }

        .skull-block .info{
            font-size: 12px;
            color: var(--default-text-color);
            font-weight: var(--font-weight-1);
        }

        .skull-block .left-skull-block {
            float: left;
            width: 27%;
            text-align: center
        }

        .skull-block .center-skull-block {
            display: inline-block;
            width: 39%;
            text-align: center
        }

        .skull-block .right-skull-block {
            float: right;
            width: 34%;
            text-align: center
        }

        .skull-block .left-skull-block .skull{
            display: inline-block;
            width: 62px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .center-skull-block .skull{
            display: inline-block;
            width: 82px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .right-skull-block .skull{
            display: inline-block;
            width: 102px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .middle-block .best-maps{
            height: 52vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 70%;
            flex: 0 0 70%;
            max-width: 70%;
        }

        .middle-block .best-maps .map-top{
            position: relative;
            height: 30%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block .best-maps .map-bottom{
            position: relative;
            overflow: auto;
            height: 70%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .map_block{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .map_block_right{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block .best-maps .map_block img, .middle-block .best-maps .map_block_right img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top .map-lower {
            position: absolute;
            max-width: 100%;
            margin-top: -33px;
        }

        .middle-block .best-maps .map-bottom .map-lower {
        }

        .middle-block .map-title-rounds .icon {
            margin-right: 0px;
        }
        .middle-block .map-title-rounds .icon img {
            filter: invert(var(--svg));
            margin-bottom: 4px;
            width: 10px;
        }

        .middle-block .best-maps .map-top .map-one {
            position: absolute;
            height: 28px;
            width: 25px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.75);
            padding-top: 1px;
            left: 7px;
        }
        .middle-block .best-maps .map-top .map-pretty-name {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: black;
            background-color: rgba(255, 255, 255, 0.75);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            left: 33px;
        }
        .middle-block .best-maps .map-top .map-title-rounds {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(241, 122, 38, 0.85);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            right: 7px;
        }

        .middle-block .hitstats-block{
            height: 52vw;
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 30%;
            flex: 0 0 30%;
            max-width: 30%;
        }

        .tooltip-top{
            position: absolute;
            width: 100%;
            height: 100%;
        }


        .back{
            width: 100%;
            height: 100%;
            border: 0px solid transparent;
            background-size: cover;
            border-radius: 4px;
        }

        .hit_player{
            position: absolute;
        }

        .hit_head{
            position: absolute;
            height:11vw;
            width:10vw;
            z-index: 101;
            bottom: 33.6vw;
            left: 10.2vw;
        }

        .hit_neak{
            position: absolute;
            height:3.5vw;
            width:7.6vw;
            z-index: 103;
            bottom: 33.6vw;
            left: 10.2vw;
        }

        .hit_left_arm{
            position: absolute;
            height:24vw;
            width:8vw;
            bottom: 24vw;
            left: 0.3vw;
            z-index: 101;
        }

        .hit_right_arm{
            position: absolute;
            height:23vw;
            width:6vw;
            bottom: 11.5vw;
            left: 20vw;
            z-index: 104;
        }

        .hit_chest{
            position: absolute;
            height:12vw;
            width: 15vw;
            bottom: 25.8vw;
            left: 6.3vw;
            z-index: 101;
        }

        .hit_belly{
            position: absolute;
            height:10vw;
            width: 16vw;
            bottom: 18.6vw;
            left: 6vw;
            z-index: 101;
        }

        .hit_left_leg{
            position: absolute;
            height:20vw;
            width: 8vw;
            bottom: 0;
            left: 7.5vw;
            z-index: 101;
        }

        .hit_right_leg{
            position: absolute;
            height:19.7vw;
            width: 11vw;
            bottom: 0;
            left: 13.8vw;
            z-index: 101;
        }

        .unusualkills_block{
            overflow: hidden;
            padding-top: 6px;
            padding-left: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .unusualkills_text{
            position: absolute;
            overflow-wrap:break-word;
            bottom:7px;
            left: 14px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 72%;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
        }

        .unusualkills_score {
            position: absolute;
            top:9px;
            left: 17px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 192%;
            font-weight: var(--font-weight-3);
            color: var(--span-color);
        }

        .unusualkills_block_left{
            overflow: hidden;
            padding-top: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .icon_block {
            position: absolute;
            right: 5px;
            top: 15px;
        }

        .unusualkills_block i, .unusualkills_block_left i {
            opacity: 0.3;
            font-size: 2em;
            text-align: center;
            color: var(--span-color);
        }

        .right-block .top{
            width:100%;
        }

        .right-block .top .table thead th {
            padding-top: 18px;
            font-size: 13px;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
            border-bottom: 2px solid var(--table-line);
        }
        .right-block .top .table tbody th {
            color: var(--default-text-color);
            font-size: 12px;
            font-weight: var(--font-weight-1);
            padding: .7em;
            border-bottom: none;
            border-top: 1px solid var(--hover);
        }
    }
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .left-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .right-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .profile__block{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .user-block{
            height: 300px;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 38%;
            flex: 0 0 38%;
            max-width: 38%;
        }

        .block{
            border: 0px solid transparent;
            border-radius: 4px;
            text-align: center;
            height:100%;
            width: 100%;
            overflow: hidden;
        }

        .user-block .block,
        .best-weapon-block .block,
        .best-maps .block ,
        .top .block,
        .unusualkills_block .block,
        .unusualkills_block_left .block{
            background-color: var(--sidebar-color);
        }

        .best-weapon-block{
            height: 300px;
            position: relative;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 62%;
            flex: 0 0 62%;
            max-width: 62%;
        }

        .user-block .avatar{
            margin-top: 18px;
            height: 110px;
            width: 110px;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .user-block .name{
            margin-top: 10px;
            font-size: 1vw;
            font-weight: var(--font-weight-1);
            color: #F17A26;
        }

        .user-block .country{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }

        .user-block .rank-img {
            margin-top: 10px;
            width: 70px;
        }

        .user-block .rank {
            margin-top: 10px;
            font-size: 80%;
            font-weight: var(--font-weight-0);
            margin-bottom: 30px
        }

        .user-block .user-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #F17A26;
            text-align: center;
            padding-top: 7px;
            color: #ffffff;
            font-size: 17px;
            font-weight: var(--font-weight-3);
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .best-weapon-block .weapons{
            padding-top:18px;
            text-align: center;
            height: 26%;
        }

        .best-weapon-block .weapons .kills{
            margin-top: 5px;
            text-align: center;
            font-size: 15px;
            font-weight: var(--font-weight-3);
        }

        .best-weapon-block .weapons li{
            display: inline-block;
            padding-left: 3%;
            padding-right: 3%;
        }

        .best-weapon-block .weapons svg, .best-weapon-block .weapons img{
            width: 5.6vw;
            max-height: 2.2vw;
            filter:invert(var(--svg));
        }

        .best-weapon-block .weapon-table {
            height: 74%;
            overflow: auto;
        }

        .best-weapon-block .weapon-table svg, .best-weapon-block .weapon-table img{
            filter:invert(var(--svg));
        }

        .short-stats-block{
            margin-top: 6px;
            height: 264px;
            width:100%;
            padding: 18px;
            background-color: var(--sidebar-color);
            text-align: center;
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .short-stats-block .left-stats-block {
            float:left;
            width: 50%;
        }
        .short-stats-block .right-stats-block {
            margin-left: 50%;
            width: 50%;
        }
        .short-stats-block ul{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }
        .short-stats-block li{
            padding-bottom: 5px;
        }
        .short-stats-block .left-stats-block ul{
            text-align: left;
        }
        .short-stats-block .right-stats-block ul{
            text-align: right;
        }

        .skull-block {
            margin-top: 5%;
            width:100%;
            font-size: 14px;
            font-weight: var(--font-weight-0);
        }

        .skull-block .info{
            font-size: 12px;
            color: var(--default-text-color);
            font-weight: var(--font-weight-1);
        }

        .skull-block .left-skull-block {
            float: left;
            width: 27%;
            text-align: center
        }

        .skull-block .center-skull-block {
            display: inline-block;
            width: 39%;
            text-align: center
        }

        .skull-block .right-skull-block {
            float: right;
            width: 34%;
            text-align: center
        }

        .skull-block .left-skull-block .skull{
            display: inline-block;
            width: 62px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .center-skull-block .skull{
            display: inline-block;
            width: 82px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .right-skull-block .skull{
            display: inline-block;
            width: 102px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .middle-block .best-maps{
            height: 22vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 70%;
            flex: 0 0 70%;
            max-width: 70%;
        }

        .middle-block .best-maps .map-top{
            position: relative;
            height: 35%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block .best-maps .map-bottom{
            position: relative;
            overflow: auto;
            height: 65%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .map_block{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .map_block_right{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block .best-maps .map_block img, .middle-block .best-maps .map_block_right img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top .map-lower {
            position: absolute;
            max-width: 100%;
            margin-top: -33px;
        }

        .middle-block .best-maps .map-bottom .map-lower {
        }

        .middle-block .map-title-rounds .icon {
            margin-right: 0px;
        }
        .middle-block .map-title-rounds .icon img {
            filter: invert(var(--svg));
            margin-bottom: 4px;
            width: 10px;
        }

        .middle-block .best-maps .map-top .map-one {
            position: absolute;
            height: 28px;
            width: 25px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.75);
            padding-top: 1px;
            left: 7px;
        }
        .middle-block .best-maps .map-top .map-pretty-name {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: black;
            background-color: rgba(255, 255, 255, 0.75);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            left: 33px;
        }
        .middle-block .best-maps .map-top .map-title-rounds {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(241, 122, 38, 0.85);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            right: 7px;
        }

        .middle-block .hitstats-block{
            height: 22vw;
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 30%;
            flex: 0 0 30%;
            max-width: 30%;
        }

        .tooltip-top{
            position: absolute;
            width: 100%;
            height: 100%;
        }


        .back{
            width: 100%;
            height: 100%;
            border: 0px solid transparent;
            background-size: cover;
            border-radius: 4px;
        }

        .hit_player{
            position: absolute;
        }

        .hit_head{
            position: absolute;
            height:3.2vw;
            width:3vw;
            z-index: 101;
            bottom: 12.1vw;
            left: 4.1vw;
        }

        .hit_neak{
            position: absolute;
            height:1.3vw;
            width:2.25vw;
            z-index: 102;
            bottom: 12vw;
            left: 4.22vw;
        }

        .hit_chest{
            position: absolute;
            height:4vw;
            width: 4.5vw;
            bottom: 9.3vw;
            left: 3vw;
            z-index: 101;
        }

        .hit_belly{
            position: absolute;
            height:2.8vw;
            width: 4.7vw;
            bottom: 7.5vw;
            left: 3vw;
            z-index: 101;
        }

        .hit_left_arm{
            position: absolute;
            height:8vw;
            width:2.5vw;
            bottom: 8.9vw;
            left: 1.1vw;
            z-index: 101;
        }

        .hit_right_arm{
            position: absolute;
            height:7.6vw;
            width:1.9vw;
            bottom: 4.8vw;
            left: 7vw;
            z-index: 104;
        }

        .hit_left_leg{
            position: absolute;
            height:8vw;
            width: 3vw;
            bottom: 0;
            left: 3vw;
            z-index: 101;
        }

        .hit_right_leg{
            position: absolute;
            height:8vw;
            width: 3.5vw;
            bottom: 0;
            left: 5.40vw;
            z-index: 101;
        }

        .unusualkills_block{
            overflow: hidden;
            padding-top: 6px;
            padding-left: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .unusualkills_text{
            position: absolute;
            overflow-wrap:break-word;
            bottom:7px;
            left: 14px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 72%;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
        }

        .unusualkills_score {
            position: absolute;
            top:9px;
            left: 17px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 192%;
            font-weight: var(--font-weight-3);
            color: var(--span-color);
        }

        .unusualkills_block_left{
            overflow: hidden;
            padding-top: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .icon_block {
            position: absolute;
            right: 5px;
            top: 15px;
        }

        .unusualkills_block i, .unusualkills_block_left i {
            opacity: 0.3;
            font-size: 2em;
            text-align: center;
            color: var(--span-color);
        }

        .right-block .top{
            width:100%;
        }

        .right-block .top .table thead th {
            padding-top: 18px;
            font-size: 13px;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
            border-bottom: 2px solid var(--table-line);
        }
        .right-block .top .table tbody th {
            color: var(--default-text-color);
            font-size: 12px;
            font-weight: var(--font-weight-1);
            padding: .7em;
            border-bottom: none;
            border-top: 1px solid var(--hover);
        }
    }

    @media (min-width: 1200px) and (max-width: 1499.98px) {
        .left-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .right-block{
            position: relative;
            margin-top: 6px;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .profile__block{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .user-block{
            height: 26vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 38%;
            flex: 0 0 38%;
            max-width: 38%;
        }

        .block{
            border: 0px solid transparent;
            border-radius: 4px;
            text-align: center;
            height:100%;
            width: 100%;
            overflow: hidden;
        }

        .user-block .block,
        .best-weapon-block .block,
        .best-maps .block ,
        .top .block,
        .unusualkills_block .block,
        .unusualkills_block_left .block{
            background-color: var(--sidebar-color);
        }

        .best-weapon-block{
            height: 26vw;
            position: relative;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 62%;
            flex: 0 0 62%;
            max-width: 62%;
        }

        .user-block .avatar{
            margin-top: 18px;
            height: 110px;
            width: 110px;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .user-block .name{
            margin-top: 10px;
            font-size: 1vw;
            font-weight: var(--font-weight-1);
            color: #F17A26;
        }

        .user-block .country{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }

        .user-block .rank-img {
            margin-top: 10px;
            width: 70px;
        }

        .user-block .rank {
            margin-top: 10px;
            font-size: 80%;
            font-weight: var(--font-weight-0);
            margin-bottom: 30px
        }

        .user-block .user-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #F17A26;
            text-align: center;
            padding-top: 7px;
            color: #ffffff;
            font-size: 17px;
            font-weight: var(--font-weight-3);
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .best-weapon-block .weapons{
            padding-top:18px;
            text-align: center;
            height: 26%;
        }

        .best-weapon-block .weapons .kills{
            margin-top: 5px;
            text-align: center;
            font-size: 15px;
            font-weight: var(--font-weight-3);
        }

        .best-weapon-block .weapons li{
            display: inline-block;
            padding-left: 3%;
            padding-right: 3%;
        }

        .best-weapon-block .weapons svg, .best-weapon-block .weapons img{
            width: 5.6vw;
            max-height: 2.2vw;
            filter:invert(var(--svg));
        }

        .best-weapon-block .weapon-table {
            height: 74%;
            overflow: auto;
        }

        .best-weapon-block .weapon-table svg, .best-weapon-block .weapon-table img{
            filter:invert(var(--svg));
        }

        .short-stats-block{
            margin-top: 6px;
            height: 264px;
            width:100%;
            padding: 18px;
            background-color: var(--sidebar-color);
            text-align: center;
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .short-stats-block .left-stats-block {
            float:left;
            width: 50%;
        }
        .short-stats-block .right-stats-block {
            margin-left: 50%;
            width: 50%;
        }
        .short-stats-block ul{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }
        .short-stats-block li{
            padding-bottom: 5px;
        }
        .short-stats-block .left-stats-block ul{
            text-align: left;
        }
        .short-stats-block .right-stats-block ul{
            text-align: right;
        }

        .skull-block {
            margin-top: 5%;
            width:100%;
            font-size: 14px;
            font-weight: var(--font-weight-0);
        }

        .skull-block .info{
            font-size: 12px;
            color: var(--default-text-color);
            font-weight: var(--font-weight-1);
        }

        .skull-block .left-skull-block {
            float: left;
            width: 27%;
            text-align: center
        }

        .skull-block .center-skull-block {
            display: inline-block;
            width: 39%;
            text-align: center
        }

        .skull-block .right-skull-block {
            float: right;
            width: 34%;
            text-align: center
        }

        .skull-block .left-skull-block .skull{
            display: inline-block;
            width: 62px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .center-skull-block .skull{
            display: inline-block;
            width: 82px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .right-skull-block .skull{
            display: inline-block;
            width: 102px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .middle-block .best-maps{
            height: 22vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 70%;
            flex: 0 0 70%;
            max-width: 70%;
        }

        .middle-block .best-maps .map-top{
            position: relative;
            height: 35%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block .best-maps .map-bottom{
            position: relative;
            overflow: auto;
            height: 65%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .map_block{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .map_block_right{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block .best-maps .map_block img, .middle-block .best-maps .map_block_right img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top .map-lower {
            position: absolute;
            max-width: 100%;
            margin-top: -33px;
        }

        .middle-block .best-maps .map-bottom .map-lower {
        }

        .middle-block .map-title-rounds .icon {
            margin-right: 0px;
        }
        .middle-block .map-title-rounds .icon img {
            filter: invert(var(--svg));
            margin-bottom: 4px;
            width: 10px;
        }

        .middle-block .best-maps .map-top .map-one {
            position: absolute;
            height: 28px;
            width: 25px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.75);
            padding-top: 1px;
            left: 7px;
        }
        .middle-block .best-maps .map-top .map-pretty-name {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: black;
            background-color: rgba(255, 255, 255, 0.75);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            left: 33px;
        }
        .middle-block .best-maps .map-top .map-title-rounds {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(241, 122, 38, 0.85);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            right: 7px;
        }

        .middle-block .hitstats-block{
            height: 22vw;
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 30%;
            flex: 0 0 30%;
            max-width: 30%;
        }

        .tooltip-top{
            position: absolute;
            width: 100%;
            height: 100%;
        }


        .back{
            width: 100%;
            height: 100%;
            border: 0px solid transparent;
            background-size: cover;
            border-radius: 4px;
        }

        .hit_player{
            position: absolute;
        }

        .hit_head{
            position: absolute;
            height:3.2vw;
            width:3vw;
            z-index: 101;
            bottom: 12.1vw;
            left: 4.1vw;
        }

        .hit_neak{
            position: absolute;
            height:1.3vw;
            width:2.25vw;
            z-index: 102;
            bottom: 12vw;
            left: 4.22vw;
        }

        .hit_chest{
            position: absolute;
            height:4vw;
            width: 4.5vw;
            bottom: 9.3vw;
            left: 3vw;
            z-index: 101;
        }

        .hit_belly{
            position: absolute;
            height:2.8vw;
            width: 4.7vw;
            bottom: 7.5vw;
            left: 3vw;
            z-index: 101;
        }

        .hit_left_arm{
            position: absolute;
            height:8vw;
            width:2.5vw;
            bottom: 8.9vw;
            left: 1.1vw;
            z-index: 101;
        }

        .hit_right_arm{
            position: absolute;
            height:7.6vw;
            width:1.9vw;
            bottom: 4.8vw;
            left: 7vw;
            z-index: 104;
        }

        .hit_left_leg{
            position: absolute;
            height:8vw;
            width: 3vw;
            bottom: 0;
            left: 3vw;
            z-index: 101;
        }

        .hit_right_leg{
            position: absolute;
            height:8vw;
            width: 3.5vw;
            bottom: 0;
            left: 5.40vw;
            z-index: 101;
        }

        .unusualkills_block{
            overflow: hidden;
            padding-top: 6px;
            padding-left: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .unusualkills_text{
            position: absolute;
            overflow-wrap:break-word;
            bottom:7px;
            left: 14px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 72%;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
        }

        .unusualkills_score {
            position: absolute;
            top:9px;
            left: 17px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 192%;
            font-weight: var(--font-weight-3);
            color: var(--span-color);
        }

        .unusualkills_block_left{
            overflow: hidden;
            padding-top: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .icon_block {
            position: absolute;
            right: 5px;
            top: 15px;
        }

        .unusualkills_block i, .unusualkills_block_left i {
            opacity: 0.3;
            font-size: 2em;
            text-align: center;
            color: var(--span-color);
        }

        .right-block .top{
            width:100%;
        }

        .right-block .top .table thead th {
            padding-top: 18px;
            font-size: 13px;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
            border-bottom: 2px solid var(--table-line);
        }
        .right-block .top .table tbody th {
            color: var(--default-text-color);
            font-size: 12px;
            font-weight: var(--font-weight-1);
            padding: .7em;
            border-bottom: none;
            border-top: 1px solid var(--hover);
        }
    }
    @media (min-width: 1500px){
        .left-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 15px;
            -ms-flex: 0 0 40%;
            flex: 0 0 40%;
            max-width: 40%;
        }

        .middle-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 32%;
            flex: 0 0 32%;
            max-width: 32%;
        }

        .right-block{
            position: relative;
            margin-top: 1rem!important;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 28%;
            flex: 0 0 28%;
            max-width: 28%;
        }

        .profile__block{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .user-block{
            height: 20vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 38%;
            flex: 0 0 38%;
            max-width: 38%;
        }

        .block{
            border: 0px solid transparent;
            border-radius: 4px;
            text-align: center;
            height:100%;
            width: 100%;
            overflow: hidden;
        }

        .user-block .block,
        .best-weapon-block .block,
        .best-maps .block ,
        .top .block,
        .unusualkills_block .block,
        .unusualkills_block_left .block{
            background-color: var(--sidebar-color);
        }

        .best-weapon-block{
            max-height: 20vw;
            position: relative;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 62%;
            flex: 0 0 62%;
            max-width: 62%;
        }

        .user-block .avatar{
            margin-top: 18px;
            height: 110px;
            width: 110px;
            border-radius: 50%;
            border: 3px solid #fff;
        }
        .user-block .name{
            margin-top: 10px;
            font-size: 1vw;
            font-weight: var(--font-weight-1);
            color: #F17A26;
        }

        .user-block .country{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }

        .user-block .rank-img {
            margin-top: 10px;
            width: 70px;
        }

        .user-block .rank {
            margin-top: 10px;
            font-size: 80%;
            font-weight: var(--font-weight-0);
            margin-bottom: 30px
        }

        .user-block .user-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #F17A26;
            text-align: center;
            padding-top: 7px;
            color: #ffffff;
            font-size: 17px;
            font-weight: var(--font-weight-3);
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .best-weapon-block .weapons{
            padding-top:18px;
            text-align: center;
            height: 26%;
        }

        .best-weapon-block .weapons .kills{
            margin-top: 5px;
            text-align: center;
            font-size: 15px;
            font-weight: var(--font-weight-3);
        }

        .best-weapon-block .weapons li{
            display: inline-block;
            padding-left: 3%;
            padding-right: 3%;
        }

        .best-weapon-block .weapons svg, .best-weapon-block .weapons img{
            width: 4.6vw;
            max-height: 1.8vw;
            filter:invert(var(--svg));
        }

        .best-weapon-block .weapon-table {
            height: 74%;
            overflow: auto;
        }

        .best-weapon-block .weapon-table svg, .best-weapon-block .weapon-table img{
            filter:invert(var(--svg));
        }

        .short-stats-block{
            margin-top: 6px;
            height: 264px;
            width:100%;
            padding: 18px;
            background-color: var(--sidebar-color);
            text-align: center;
            border: 0px solid transparent;
            border-radius: 4px;
        }

        .short-stats-block .left-stats-block {
            float:left;
            width: 50%;
        }
        .short-stats-block .right-stats-block {
            margin-left: 50%;
            width: 50%;
        }
        .short-stats-block ul{
            font-size: 13px;
            font-weight: var(--font-weight-0);
            color: var(--default-text-color);
        }
        .short-stats-block li{
            padding-bottom: 5px;
        }
        .short-stats-block .left-stats-block ul{
            text-align: left;
        }
        .short-stats-block .right-stats-block ul{
            text-align: right;
        }

        .skull-block {
            margin-top: 5%;
            width:100%;
            font-size: 14px;
            font-weight: var(--font-weight-0);
        }

        .skull-block .info{
            font-size: 12px;
            color: var(--default-text-color);
            font-weight: var(--font-weight-1);
        }

        .skull-block .left-skull-block {
            float: left;
            width: 27%;
            text-align: center
        }

        .skull-block .center-skull-block {
            display: inline-block;
            width: 39%;
            text-align: center
        }

        .skull-block .right-skull-block {
            float: right;
            width: 34%;
            text-align: center
        }

        .skull-block .left-skull-block .skull{
            display: inline-block;
            width: 62px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .center-skull-block .skull{
            display: inline-block;
            width: 82px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .skull-block .right-skull-block .skull{
            display: inline-block;
            width: 102px;
            background-image: url(storage/cache/img/icons/custom/global/skull.svg);
            background-repeat: space;
            height: 24px;
        }

        .middle-block .best-maps{
            height: 20vw;
            position: relative;
            width: 100%;
            -ms-flex: 0 0 60%;
            flex: 0 0 60%;
            max-width: 60%;
        }

        .middle-block .best-maps .map-top{
            position: relative;
            height: 31%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .middle-block .best-maps .map-bottom{
            position: relative;
            overflow: auto;
            height: 69%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .map_block{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .map_block_right{
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: 6px;
            padding-left: 6px;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .middle-block .best-maps .map_block img, .middle-block .best-maps .map_block_right img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 4px;
        }

        .middle-block .best-maps .map-top .map-lower {
            position: absolute;
            max-width: 100%;
            margin-top: -33px;
        }

        .middle-block .best-maps .map-bottom .map-lower {
        }

        .middle-block .map-title-rounds .icon {
            margin-right: 0px;
        }
        .middle-block .map-title-rounds .icon img {
            filter: invert(var(--svg));
            margin-bottom: 4px;
            width: 10px;
        }

        .middle-block .best-maps .map-top .map-one {
            position: absolute;
            height: 28px;
            width: 25px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.75);
            padding-top: 1px;
            left: 7px;
        }
        .middle-block .best-maps .map-top .map-pretty-name {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: black;
            background-color: rgba(255, 255, 255, 0.75);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            left: 33px;
        }
        .middle-block .best-maps .map-top .map-title-rounds {
            position: absolute;
            height: 28px;
            text-align: center;
            vertical-align: center;
            font-weight: 700;
            font-size: 18px;
            color: white;
            background-color: rgba(241, 122, 38, 0.85);
            padding-top: 1px;
            padding-left: 10px;
            padding-right: 10px;
            right: 7px;
        }

        .middle-block .hitstats-block{
            height: 20vw;
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Отступ слева -> Блоки */
            padding-left: 6px;
            -ms-flex: 0 0 40%;
            flex: 0 0 40%;
            max-width: 40%;
        }

        .tooltip-top{
            position: absolute;
            width: 100%;
            height: 100%;
        }


        .back{
            width: 100%;
            height: 100%;
            border: 0px solid transparent;
            background-size: cover;
            border-radius: 4px;
        }

        .hit_player{
            position: absolute;
        }

        .hit_head{
            position: absolute;
            height:3.4vw;
            width:3.16vw;
            z-index: 103;
            bottom: 11.8vw;
            left: 4.3vw;
        }

        .hit_neak{
            position: absolute;
            height:1.26vw;
            width: 2.68vw;
            bottom: 11.7vw;
            left: 4.2vw;
            z-index: 103;
        }

        .hit_chest{
            position: absolute;
            height:3.9vw;
            width: 4.9vw;
            bottom: 9.1vw;
            left: 3vw;
            z-index: 101;
        }

        .hit_belly{
            position: absolute;
            height:2.6vw;
            width: 4.9vw;
            bottom: 7.5vw;
            left: 2.9vw;
            z-index: 102;
        }

        .hit_left_arm{
            position: absolute;
            height:8vw;
            width:2.65vw;
            bottom: 8.4vw;
            left: 0.96vw;
            z-index: 101;
        }

        .hit_right_arm{
            position: absolute;
            height:8.3vw;
            width:2vw;
            bottom: 4.3vw;
            left: 7vw;
            z-index: 102;
        }

        .hit_left_leg{
            position: absolute;
            height:8vw;
            width: 3vw;
            bottom: 0;
            left: 3vw;
            z-index: 101;
        }

        .hit_right_leg{
            position: absolute;
            height:8vw;
            width: 3.5vw;
            bottom: 0;
            left: 5.40vw;
            z-index: 101;
        }

        .unusualkills_block{
            overflow: hidden;
            padding-top: 6px;
            padding-left: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .unusualkills_text{
            position: absolute;
            overflow-wrap:break-word;
            bottom:7px;
            left: 14px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 72%;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
        }

        .unusualkills_score {
            position: absolute;
            top:9px;
            left: 17px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            font-size: 192%;
            font-weight: var(--font-weight-3);
            color: var(--span-color);
        }

        .unusualkills_block_left{
            overflow: hidden;
            padding-top: 6px;
            height: 90px;
            width: 100%;
            position: relative;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .icon_block {
            position: absolute;
            right: 5px;
            top: 15px;
        }

        .unusualkills_block i, .unusualkills_block_left i {
            opacity: 0.3;
            font-size: 2em;
            text-align: center;
            color: var(--span-color);
        }

        .right-block .top{
            width:100%;
        }

        .right-block .top .table thead th {
            padding-top: 18px;
            font-size: 13px;
            font-weight: var(--font-weight-1);
            color: var(--default-text-color);
            border-bottom: 2px solid var(--table-line);
        }
        .right-block .top .table tbody th {
            color: var(--default-text-color);
            font-size: 12px;
            font-weight: var(--font-weight-1);
            padding: .7em;
            border-bottom: none;
            border-top: 1px solid var(--hover);
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ToDoList</title>
    <link rel="icon" type="image/x-icon" href="/lab1/assets/img/tree.avif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400, 500, 700&display=swap&subset=vietnamese"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <!-- import xlsx -->

    <!-- <link rel="stylesheet" href="./assets/css/base.css" /> -->
    <link rel="stylesheet" href='/lab1/assets/css/main.css' />


</head>

<body>
    <div class=" app">
        <div class="app__header grid">
            <div class="row no-gutters header__row">
                <div class="header__logo l-2">
                    <div class="header__logo--icon">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="header__logo--text">
                        <p>Constructor</p>
                    </div>
                </div>
                <div class="header__menu l-5 ">
                    <div class="header__menu--list">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">AbountUs</a></li>
                            <li><a href="#">News </a></li>
                            <li><a href="#">User policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="header__menu--icon">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="header__search l-3 ls-4">
                    <div class="header__search--iconsearch">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="header__search--input">
                        <input type="text" placeholder="Search Product, Orders and Clients " />
                    </div>
                    <div class="header__search--iconnext">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="header__info l-2">
                    <div class="header__info--contact">
                        <div class="contact__user">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="contact__name">
                            <p>Clyton Santor</p>
                        </div>
                    </div>
                    <div class="header__info--bell">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <div class="header__info--close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="app__container grid">
            <div class="row no-gutters">
                <div class="container__sidebar l-1 ls-1">
                    <div class="container__sidebar--top">
                        <div class="container__sidebar--laban">
                            <i class="fa-solid fa-compass"></i>
                        </div>
                        <div class="container__sidebar--star">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="container__sidebar--masage">
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </div>
                        <div class="container__sidebar--chungkhoan">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </div>
                        <div class="container__sidebar--earth">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <div class="container__sidebar--lego">
                            <i class="fa-regular fa-hospital"></i>
                        </div>
                    </div>
                    <div class="container__sidebar--bot">
                        <div class="sidebar__bot-img">
                            <img src="/lab1/assets/img/avt1.png " alt="avt">
                        </div>
                        <div class="sidebar__bot-img">
                            <img src="/lab1/assets/img/avt3.avif" alt="avt">

                        </div>
                        <div class="sidebar__bot-img">
                            <img src="/lab1/assets/img/avt4.avif" alt="avt">

                        </div>
                        <div class="sidebar__bot-img">
                            <img src="/lab1/assets/img/avt5.avif" alt="avt">

                        </div>
                        <div class="sidebar__bot--icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>

                    </div>
                </div>
                <div class="container__info l-3 m-3 c-12">
                    <div class="container__info--contact">
                        <div class="info__contact--icon">
                            <div class="contact--icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="contact--icon" id="js-export">
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </div>
                        <div class="info__contact--img">
                            <img src="/lab1/assets/img/avt1.png" alt="avt" />
                            <p>2</p>
                        </div>
                        <div class="info__contact--text">
                            <p>Hello Alfred Bryant</p>
                            <br />
                            <p class="">adrent.nader@yahoo.com</p>
                        </div>
                    </div>
                    <div class="container__info--table">
                        <table class="table-info">
                            <tr>
                                <td style="border-top-left-radius: 12px!important;">
                                    <div class="icon">
                                        <i class="fa-solid fa-table-columns"></i>
                                    </div>
                                    <div class="text">
                                        <p>Dashbroad</p>
                                    </div>
                                </td>
                                <td style="border-top-right-radius: 12px!important;" class="active">
                                    <div class="icon">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Notes</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Tasks</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon">
                                        <i class="fa-solid fa-cloud"></i>
                                    </div>
                                    <div class="text">
                                        <p>Files</p>
                                    </div>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p>Emails</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon">
                                        <i class="fa-solid fa-people-group"></i>
                                    </div>
                                    <div class="text">
                                        <p>Clients</p>
                                    </div>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-bottom-left-radius: 12px!important;">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="text">
                                        <p>Caledarts</p>
                                    </div>
                                </td>
                                <td style="border-bottom-right-radius: 12px!important;">
                                    <div class="icon">
                                        <i class="fa-solid fa-wrench"></i>
                                        <div class="text" style="margin-top: 12px;">
                                            <p>Setting</p>
                                        </div>
                                </td>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="container__info--icon">
                        <i class="fa-solid fa-phone"></i>
                        <i class="fa-solid fa-envelope"></i>
                        <i class="fa-solid fa-address-book"></i>
                        <i class="fa-solid fa-location-arrow"></i>
                        <i class="fa-solid fa-square-phone"></i>
                    </div>
                </div>
                <div class="container__content l-8 ls-8 m-9 c-12">
                    <div class="container__content--header">
                        <div class="row no-gutters">
                            <div class="content__header--nav l-9 c-12">
                                <ul>
                                    <li>
                                        <div class="item-nav">
                                            <i class="fa-solid fa-list-check"></i>

                                            <p>
                                                List Tasks
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-nav active--nav">
                                            <i class="fa-solid fa-table-columns"></i>

                                            <p>
                                                Broads
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-nav">
                                            <i class="fa-solid fa-calendar-days"></i>

                                            <p>
                                                Calendar
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-nav">
                                            <i class="fa-solid fa-signal"></i>
                                            <p>
                                                Gantt
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-nav">
                                            <i class="fa-solid fa-bars"></i>
                                            <p>
                                                Timeline
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-nav">
                                            <i class="fa-solid fa-arrow-trend-up"></i>
                                            <p>
                                                Activity
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="container__heaeder--search l-3 ls-3">
                                <div class="header__search--iconsearch">
                                    <i class="fa-solid fa-magnifying-glass">

                                    </i>
                                </div>
                                <div class="header__search--input">
                                    <input type="text " placeholder="Search tasks">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container__content--body">
                        <div class="row no-gutters row__content">

                            <div class="col container__content--item l-3 ls-4 m-6 c-12 facet-list" id="userFacets">
                                <div class="content__item--add" draggable="false">
                                    <p>TO DO</p>
                                    <p>5</p>
                                    <i class="fa-solid fa-ellipsis"></i>
                                    <i class="fa-solid fa-plus js-btnadd"></i>
                                </div>
                                <!-- <div class="content__item--info" draggable="false" >
                    <a href="" class="item--info" draggable="false">
                      <div class="img" style="background-image: url(/lab1/assets/img/tree.avif);"></div>
                      <div class="textimg">
                        <p>Space Task2</p>
                        <img src="/lab1/assets/img/avt1.png" alt="avt">
                      </div>
                      <p class="text--item">Make Money Online Throught</p>
                      <div class="itemchoes">
                        <i class="fa-solid fa-list-ul"></i>
                        <p>4</p>
                        <i class="fa-solid fa-link"></i>
                        <p>2</p>
                        <i class="fa-solid fa-stopwatch"></i>
                        <p>6 Days Left</p>
                      </div>

                    </a>
                  </div> -->
                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                          <div class="avtchen" style="display: flex; position: relative;">
                            
                            <img src="/lab1/ alt="avt">
                            <img src="/lab1/assets/img/avt3.avif" alt="avt">
                          </div>
                        </div>
                        <p class="text--item">Make Money Online Throught</p>
                    </div>

                    </div> -->
                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child" >
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                          <div class="avtchen" style="display: flex; position: relative;">
                            <div class="fiximg">
                            <img src="/lab1/assets/img/avt4.avif" alt="avt">

                            </div>
                            <div class="">
                            <img src="/lab1/assets/img/avt5.avif" alt="avt">

                            </div>
                            <img src="/lab1/assets/img/child1.avif" alt="avt">
                            <div class=""></div>
                          </div>
                        </div>
                        <p class="text--item">Search Engine Optimization technologi</p>
                    </div>


                    </div> -->

                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/child2.avif" alt="avt">
                        </div>
                        <p class="text--item">Charectoristic Of a Successfull</p>
                    </div>

                    </div> -->

                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/child3.avif" alt="avt">
                        </div>
                        <p class="text--item">Getting Free Publicity</p>
                    </div>

                    </div> -->

                                <!-- <div class="content__item--child"style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                         
                            <img src="/lab1/assets/img/avt1.png" alt="avt">
                          
                        </div>
                        <p class="text--item">Importan Of the Customer infomation</p>
                    </div>

                    </div> -->
                                <div class="btnadd" style="display:none">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>NEW TASK</p>
                                </div>



                            </div>
                            <div class="col container__content--item l-3 ls-4 m-6 c-12 facet-list" id="allFacets">
                                <div class="content__item--add" draggable="false">
                                    <p>IN WORK</p>
                                    <p>5</p>
                                    <i class="fa-solid fa-ellipsis"></i>
                                    <i class="fa-solid fa-plus js-btnadd"></i>
                                </div>
                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task3</p>
                            
                            <img src="/lab1/assets/img/avt5.avif" alt="avt">
                        </div>
                        <p class="text--item">Type Of Paper In Catalog</p>
                    </div>

                    </div> -->
                                <!-- <div class="content__item--info" draggable="false">
                    <a href="" class="item--info" draggable="false">
                      <div class="img" style="background-image: url(/lab1/assets/img/buiding.avif);"></div>
                      <div class="textimg">
                        <p>Space Task2</p>
                        <img src="/lab1/assets/img/child1.avif" alt="avt">
                      </div>
                      <p class="text--item">Global Resorts Network</p>
                      <div class="itemchoes">
                        <i class="fa-solid fa-list-ul"></i>
                        <p>4</p>
                        <i class="fa-solid fa-link"></i>
                        <p>2</p>
                        <i class="fa-solid fa-stopwatch"></i>
                        <p>6 Days Left</p>
                      </div>

                    </a>
                  </div> -->
                                <!-- <div class="content__item--child " style="display: none;">
                    <div class="item__child">
                   <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/child2.avif" alt="avt">
                        </div>
                        <p class="text--item">Devoloper App</p>
                    </div>

                    </div> -->
                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/child3.avif" alt="avt">
                        </div>
                        <p class="text--item">Copper Canyon</p>
                         <div class="itemchoes">
                        <i class="fa-solid fa-list-ul"></i>
                        <p>4</p>
                        <i class="fa-solid fa-link"></i>
                        <p>2</p>
                        <i style="color: rgb(238, 72, 72);" class="fa-solid fa-stopwatch"></i>
                        <p style="color: rgb(238, 72, 72);">1 Days Left</p>
                      </div>
                    </div>
                    

                    </div> -->
                                <div class="btnadd" style="display:none">
                                    <i class="fa-solid fa-plus"></i>
                                    <p>NEW TASK</p>
                                </div>


                            </div>
                            <div class="col container__content--item l-3 ls-4 m-6 c-12 facet-list" id="userFacets">
                                <div class="content__item--add" draggable="false">
                                    <p>REVIEW</p>
                                    <p>5</p>
                                    <i class="fa-solid fa-ellipsis"></i>
                                    <i class="fa-solid fa-plus js-btnadd"></i>
                                </div>
                                <!-- <div class="content__item--child" style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task3</p>
                            
                            <img src="/lab1/ alt="avt">
                        </div>
                        <p class="text--item">Astronomy Or Astronogy</p>
                    </div>

                    </div> -->
                                <!-- <div class="content__item--child"style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/avt3.avif" alt="avt">
                        </div>
                        <p class="text--item">Astronomy Bonoculars A Great</p>
                    </div>

                    </div> -->
                                <!-- <div class="content__item--child" draggable="false">
                    <div class="item__child">
                      <div class="textimg">
                          <i class="fa-solid fa-xmark"></i>
                            
                          <p class="">Task name of type</p>
                            <img src="/lab1/assets/img/avt4.avif" alt="avt">
                        </div>
                         <div class="itemchoes">
                        <i class="fa-solid fa-list-ul"></i>
                        <i class="fa-solid fa-link"></i>
                        <i class="fa-solid fa-stopwatch"></i>
                        <div class="btnsave">
                          <p>Save</p>

                        </div>
                      </div>
                    </div>
                    

                    </div> -->


                            </div>
                            <div class="col container__content--item l-3 ls-4 m-6 c-12 facet-list" id="allFacets">
                                <div class="content__item--add" draggable="false">
                                    <p>DONE</p>
                                    <p>5</p>
                                    <i class="fa-solid fa-ellipsis"></i>
                                    <i class="fa-solid fa-plus js-btnadd"></i>
                                </div>
                                <!-- <div class="content__item--child"style="display: none;">
                    <div class="item__child">
                      <i class="iconR fa-solid fa-trash js-trash"></i>
                      
                      <div class="textimg">
                          <p>Space Task2</p>
                            
                            <img src="/lab1/assets/img/avt1.png" alt="avt">
                        </div>
                        <p class="text--item">Copper Canyon</p>
                    </div>

                    </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="container__content--footer">
                        <div class="footer--header">
                            <i class="fa-solid fa-circle"></i>
                            <p>Development App</p>
                            <i class="fa-solid fa-link"></i>
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="footer--body">
                            <div class="footer__body--item">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                <p>4 Subtasks</p>
                                <i class="fa-solid fa-flag"></i>
                                <p>
                                    Priority Enabled
                                </p>

                            </div>
                            <div class="footer__body--item">
                                <i class="fa-solid fa-cloud"></i>
                                <p>3 Files </p>
                                <i class="fa-regular fa-comment-dots"></i>
                                <p>
                                    7 Comments
                                </p>

                            </div>
                            <div class="footer__body--item fixlocation">


                                <img src="/lab1/assets/img/avt5.avif" alt="">
                                <p class=" fixmr">
                                    Priority Enabled
                                </p>

                            </div>
                        </div>
                        <div class="footer--footer">
                            <p>START DATE <br />
                                <span>Sep 3, 9:00pm</span>
                            </p>
                            <i class="fa-solid fa-chevron-right"></i>
                            <p>DO DATE <br />
                                <span>Sep 4, 9:00pm</span>
                            </p>
                            <div class="pause">
                                <i class="fa-solid fa-play"></i>
                            </div>
                            <pc class="fixp">00</pc>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="module" src="/lab1/assets/js/main.js"></script>
</body>

</html>
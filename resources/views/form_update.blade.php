


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : News Beat
Description: A fixed-width design suitable for small sites and blogs.
Version    : 1.0
Released   : 20071215

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Newsbeat by TEMPLATED</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<div id="header">
    <h1><a href="#">News Beat</a></h1>
    <h2>By TEMPLATED</h2>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="/t" accesskey="1" title="">Homepage</a></li>
        <li><a href="#" accesskey="2" title="">Products</a></li>
        <li><a href="#" accesskey="3" title="">Services</a></li>
        <li><a href="#" accesskey="4" title="">About Us</a></li>
        <li><a href="#" accesskey="5" title="">Contact Us</a></li>
    </ul>
</div>
<hr />
<div id="latest-post" class="post">
    <p class="byline"><span>Posted on December 15th, 2007 by <a href="#">Someone</a></span></p>


</div>
<div id ="teste">
    <?php

    echo Form::open(array('post' => 'app/Modell'));
    echo Form::text('id',"$id");
    echo Form::text('name1', "$name");
    echo Form::text('dats1',"$dats");
    echo Form::text('Texts1',"$Texts");
    echo Form::submit('Click Me!');
    echo Form::close();

    ?>

</div>




</ul>
<div style="clear: both; height: 40px;">&nbsp;</div>
</div>
<div id="sidebar">
    <ul>
        <li id="search">
            <h2>Search</h2>
            <form id="searchform" method="get" action="">
                <div>
                    <input type="text" name="s" id="s" size="15" />
                    <br />
                    <input name="submit" type="submit" value="Search" />
                </div>
            </form>
        </li>
        <li id="calendar">
            <h2>Calendar</h2>
            <div id="calendar_wrap">
                <table summary="Calendar">
                    <caption>
                        November 2007
                    </caption>
                    <thead>
                    <tr>
                        <th abbr="Monday" scope="col" title="Monday">M</th>
                        <th abbr="Tuesday" scope="col" title="Tuesday">T</th>
                        <th abbr="Wednesday" scope="col" title="Wednesday">W</th>
                        <th abbr="Thursday" scope="col" title="Thursday">T</th>
                        <th abbr="Friday" scope="col" title="Friday">F</th>
                        <th abbr="Saturday" scope="col" title="Saturday">S</th>
                        <th abbr="Sunday" scope="col" title="Sunday">S</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td abbr="October" colspan="3" id="prev"><a href="#" title="View posts for October 2007">&laquo; Oct</a></td>
                        <td class="pad">&nbsp;</td>
                        <td abbr="December" colspan="3" id="next"><a href="3" title="View posts for October 2007">Dec &raquo;</a></td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td colspan="3" class="pad">&nbsp;</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td><a href="#">12</a></td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td id="today">24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td class="pad" colspan="2">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </li>
        <li id="categories-1">
            <h2>Categories</h2>
            <ul>
                <li><a href="#" title="View all posts filed under Uncategorized">Uncategorized</a> (3) </li>
                <li><a href="#" title="View all posts filed under Lorem Ipsum">Lorem Ipsum</a> (42) </li>
                <li><a href="#" title="View all posts filed under Urna Congue Rutrum">Urna Congue Rutrum</a> (28) </li>
                <li><a href="#" title="View all posts filed under Augue Praesent">Augue Praesent</a> (55) </li>
                <li><a href="#" title="View all posts filed under Vivamus Fermentum">Vivamus Fermentum</a> (13) </li>
            </ul>
        </li>
    </ul>
    <div style="clear: both; height: 40px;">&nbsp;</div>
</div>
<hr />
<div id="footer">
    <p class="legal">&copy;2007 All Rights Reserved.</p>
    <p class="credit">Designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>

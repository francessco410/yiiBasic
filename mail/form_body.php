<?php
/**
 * @var $model app\models\PersonBooking
 * @var $logo
 */

?>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<div class="container" style="display: inline-block;">
<!--    <img class="logo" src="/reservation2/web/uploads/web_img/logo.jpg">-->
    <img width="100" src="<?= $message->embed($logo); ?>">
    <div class="wrapper" style="padding: 20px;
                        font-family: 'Raleway', sans-serif;
                        display: inline-block;
                        background-color: #F7F9FC; ">
        <h2 class="title" style="font-size: 21px; letter-spacing: 1.3px; text-align: center; margin-bottom: 5px; font-family: 'Raleway';">BOM DIA!</h2>
        <h3 class="subtitle" style="margin-top: 0;
                            margin-bottom: 0;
                            text-transform: uppercase;
                            letter-spacing: 1.3px;
                            font-family: 'Raleway';
                            font-size: 1vw;
                            text-align: center;">New student want to reserve room</h3>
        <h4 class="datetime" style="margin-top: 0;
        text-align: center;">14-02-2017 3:15</h4>

        <table class="tg" style="border-collapse: collapse;">
          <tr>
              <td class="label" style="padding: 5px;
                                font-weight: bold;
                                color: #572814;
                                border: 1px grey solid;">Name: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  "><?= $model->name ?></td>
          </tr>
          <tr>
              <td class="label" style="
                padding: 5px;
                font-weight: bold;
                color: #572814;
                border: 1px grey solid;
                  ">E-mail: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">marcin.wlodarczyk@gmail.com</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Sex: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">Male</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Country: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">Poland</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Your Study Course: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">IT Technology</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Home University: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">PWSZ Kalisz</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Arrival date: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">14-02-2017</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Utility kit: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">YES</td>
          </tr>
          <tr>
              <td class="label" style="
                  padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
                  ">Smoker: </td>
              <td class="content" style="
                  text-align: right;
        border: 1px grey solid;
                  ">NO</td>
          </tr>
        </table>
    </div>
</div>

<style>
/*    .container{
        display: inline-block;
    }*/
    
    .logo{
        width: 150px;
        display: block;
        margin: 0 auto;
    }
    
/*    .wrapper{
        padding: 20px;
        font-family: 'Raleway', sans-serif;
        display: inline-block;
        background-color: #F7F9FC; 
    }*/
 
/*    .subtitle{
        margin-top: 0;
        margin-bottom: 0;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-size: 1vw;
        text-align: center;
    }*/
    
/*    .datetime{
        margin-top: 0;
        text-align: center;
    }
    */
/*    table{
        border-collapse: collapse;
    }*/

    
/*    .label{
        padding: 5px;
        font-weight: bold;
        color: #572814;
        border: 1px grey solid;
    }*/
    
/*    .content{
        text-align: right;
        border: 1px grey solid;
    }*/
    
</style>
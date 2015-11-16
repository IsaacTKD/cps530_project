<?php

/* @var $this yii\web\View */

$this->title = 'Yii Framework';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>The presentation of Yii Framework!</h1>

        <!-- <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">
      <div class="row">
        <div class="col-lg-12">
            <h2>What Is Yii?</h2>
            <p>
            Yii (pronounced "Yee") is a PHP-based open source web application framework. Yii promotes DRY (Don't Repeat Yourself) design and rapid development.
            A main focus of the Yii framework is performance and efficiency, with Yii outperforming all other PHP-based frameworks in the field of requests processed per second.
            </p>
              <figure class="center">
                  <img src="performance-20090131.png" alt="Performance Comparison Among PHP Frameworks" height="300" width="550"/>
                  <figcaption>Requests Per Second with and without Alternative PHP Cache (APC)</figcaption>
              </figure>
        </div>
      </div>

      <div class="row">
          <div class="col-lg-12">
                <h2>Popularity</h2>
                <script type="text/javascript" src="//www.google.ca/trends/embed.js?hl=en-US&q=Yii,+/m/09t3sp,+Symfony,+/m/07h2gf,+WebGUI&cmpt=q&tz=Etc/GMT%2B5&tz=Etc/GMT%2B5&content=1&cid=TIMESERIES_GRAPH_AVERAGES_CHART&export=5&w=1000&h=350"></script>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
              <h2>Technological bases</h2>

              <p>
                A fundamental feature of Yii is its implementation of the Model-View-Controller (MVC) design pattern.
                The MVC design pattern separates the application rules and logic from the user interface, so each part can be edited without
                affecting the others.
                <ul>
                  <li>The Model component of MVC contains the behaviour of the application, and is independant of the user interface. The model manages application rules, logic, and data.</li>
                  <li>The View component is the visual output of information, based on any changes made to the model.</li>
                  <li>The Controller component sends commands to the model to update/change its state. It can also send commands to a view, to alter its output.</li>
                </ul>
              </p>

        </div>
      </div>
      <div class="row">
          <div class="col-lg-6">
                <h2>Strengths</h2>
                  <ul>
                    <li>Easy to Install</li>
                    <li>Model-View-Controller</li>
                    <li>Easy to debug the code</li>
                    <li>Flexibility and Modularity. Yii features can be replaced with code created from scratch, or even code borrowed from other frameworks.</li>
                  </ul>

          </div>
          <div class="col-lg-6">
               <h2>Weaknesses</h2>
          </div>
      </div>
      <div class="row">
            <div class="col-lg-12">
                <div class="container">
                  <h2>Which developers mostly use and for what kind of websites</h2>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Developers</th>
                        <th>Websites (kind)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Web designer</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Web programmer</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Flash developer</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Content developer</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

            </div>
        </div>
</div>

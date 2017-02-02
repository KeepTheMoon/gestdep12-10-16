<?php
/**
 * Class vue compte
 */
/**
 * Construit de la gestion de compte pour l'utilisateur
 * @author baptiste
 * @package vue
 */
class vueCompte{


/**
 * constructeur vide
 */
    public function __construct($mail){
?>
      <div class="container"> 
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Gestion du compte <small><?php echo $mail;?></small></h1>
      </div>
    </div><!--/.row-->
                  
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">120</div>
              <div class="text-muted">Trajets</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">52</div>
              <div class="text-muted">Voitures</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">24</div>
              <div class="text-muted">Clients</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">25.2k</div>
              <div class="text-muted">Jours</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Changement de mot de passe</div>
          <div class="panel-body">
            <form class="form-horizontal" action="index.php?compte" method="post">
              <fieldset>
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="old">Mot de passe actuel</label>
                  <div class="col-md-9">
                  <input id="old" name="old" type="password" placeholder="Mot de passe" class="form-control">
                  </div>
                </div>
              
                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="new">Nouveau mot de passe</label>
                  <div class="col-md-9">
                    <input id="new" name="new" type="password" placeholder="Mot de passe" class="form-control">
                  </div>
                </div>
                
                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="conf">Confirmation</label>
                  <div class="col-md-9">
                    <input id="conf" name="conf" type="password" placeholder="Mot de passe" class="form-control">
                  </div>
                </div>
                
                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 widget-right">
                    <button type="submit" name="envoyer" class="btn btn-default btn-md pull-right">Envoyer</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        
        <div class="panel panel-default chat">
          <div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Questions</div>
        
          <div class="panel-body">
            <ul>
              <li class="left clearfix">
                <span class="chat-img pull-left">
                  <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                  </p>
                </div>
              </li>
              <li class="right clearfix">
                <span class="chat-img pull-right">
                  <img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small>
                  </div>
                  <p>
                    Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
                  </p>
                </div>
              </li>
              <li class="left clearfix">
                <span class="chat-img pull-left">
                  <img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
                  </p>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="panel-footer">
            <div class="input-group">
              <input id="btn-input" type="text" class="form-control input-md" placeholder="Tapez votre message ici..." />
              <span class="input-group-btn">
                <button class="btn btn-success btn-md" id="btn-chat">Envoyer</button>
              </span>
            </div>
          </div>
        </div>
        
      </div><!--/.col-->
      
      <div class="col-md-4">
      
        <div class="panel panel-red">
          <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendrier</div>
          <div class="panel-body">
            <div id="calendar"></div>
          </div>
        </div>
        
        <div class="panel panel-blue">
          <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>
          <div class="panel-body">
            <ul class="todo-list">
            <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Make a plan for today</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Update Basecamp</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Send email to Jane</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Drink coffee</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Do some work</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <label for="checkbox">Tidy up workspace</label>
                </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <div class="input-group">
              <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />
              <span class="input-group-btn">
                <button class="btn btn-primary btn-md" id="btn-todo">Add</button>
              </span>
            </div>
          </div>
        </div>
                
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.container-->

  <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
<?php
    }




}
?>
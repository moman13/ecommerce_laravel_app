/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
 var manager_array=[];
(function ($, AdminLTE) {

  "use strict";
  jQuery('#color').on('change',function(){
	jQuery('#choosen-color').val(jQuery(this).val());
});
  /**
   * List of all the available skins
   *
   * @type Array
   */
   $(document).ready(function() {
     $(window).keydown(function(event){
       if(event.keyCode == 13) {
         event.preventDefault();
         return false;
       }
     });
   });
  var my_skins = [
    "skin-blue",
    "skin-black",
    "skin-red",
    "skin-yellow",
    "skin-purple",
    "skin-green",
    "skin-blue-light",
    "skin-black-light",
    "skin-red-light",
    "skin-yellow-light",
    "skin-purple-light",
    "skin-green-light"
  ];

  //Create the new tab
  var tab_pane = $("<div />", {
    "id": "control-sidebar-theme-demo-options-tab",
    "class": "tab-pane active"
  });

  //Create the tab button
  var tab_button = $("<li />", {"class": "active"})
          .html("<a href='#control-sidebar-theme-demo-options-tab' data-toggle='tab'>"
                  + "<i class='fa fa-wrench'></i>"
                  + "</a>");

  //Add the tab button to the right sidebar tabs
  $("[href='#control-sidebar-home-tab']")
          .parent()
          .before(tab_button);

  //Create the menu
  var demo_settings = $("<div />");

  //Layout options
  demo_settings.append(
          "<h4 class='control-sidebar-heading'>"
          + "Layout Options"
          + "</h4>"
          //Fixed layout
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-layout='fixed' class='pull-right'/> "
          + "Fixed layout"
          + "</label>"
          + "<p>Activate the fixed layout. You can't use fixed and boxed layouts together</p>"
          + "</div>"
          //Boxed layout
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-layout='layout-boxed'class='pull-right'/> "
          + "Boxed Layout"
          + "</label>"
          + "<p>Activate the boxed layout</p>"
          + "</div>"
          //Sidebar Toggle
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-layout='sidebar-collapse' class='pull-right'/> "
          + "Toggle Sidebar"
          + "</label>"
          + "<p>Toggle the left sidebar's state (open or collapse)</p>"
          + "</div>"
          //Sidebar mini expand on hover toggle
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-enable='expandOnHover' class='pull-right'/> "
          + "Sidebar Expand on Hover"
          + "</label>"
          + "<p>Let the sidebar mini expand on hover</p>"
          + "</div>"
          //Control Sidebar Toggle
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-controlsidebar='control-sidebar-open' class='pull-right'/> "
          + "Toggle Right Sidebar Slide"
          + "</label>"
          + "<p>Toggle between slide over content and push content effects</p>"
          + "</div>"
          //Control Sidebar Skin Toggle
          + "<div class='form-group'>"
          + "<label class='control-sidebar-subheading'>"
          + "<input type='checkbox' data-sidebarskin='toggle' class='pull-right'/> "
          + "Toggle Right Sidebar Skin"
          + "</label>"
          + "<p>Toggle between dark and light skins for the right sidebar</p>"
          + "</div>"
          );
  var skins_list = $("<ul />", {"class": 'list-unstyled clearfix'});

  //Dark sidebar skins
  var skin_blue =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-blue' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9;'></span><span class='bg-light-blue' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Blue</p>");
  skins_list.append(skin_blue);
  var skin_black =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-black' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div style='box-shadow: 0 0 2px rgba(0,0,0,0.1)' class='clearfix'><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe;'></span><span style='display:block; width: 80%; float: left; height: 7px; background: #fefefe;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Black</p>");
  skins_list.append(skin_black);
  var skin_purple =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-purple' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-purple-active'></span><span class='bg-purple' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Purple</p>");
  skins_list.append(skin_purple);
  var skin_green =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-green' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-green-active'></span><span class='bg-green' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Green</p>");
  skins_list.append(skin_green);
  var skin_red =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-red' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-red-active'></span><span class='bg-red' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Red</p>");
  skins_list.append(skin_red);
  var skin_yellow =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-yellow' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-yellow-active'></span><span class='bg-yellow' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin'>Yellow</p>");
  skins_list.append(skin_yellow);

  //Light sidebar skins
  var skin_blue_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-blue-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9;'></span><span class='bg-light-blue' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px'>Blue Light</p>");
  skins_list.append(skin_blue_light);
  var skin_black_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-black-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div style='box-shadow: 0 0 2px rgba(0,0,0,0.1)' class='clearfix'><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe;'></span><span style='display:block; width: 80%; float: left; height: 7px; background: #fefefe;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px'>Black Light</p>");
  skins_list.append(skin_black_light);
  var skin_purple_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-purple-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-purple-active'></span><span class='bg-purple' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px'>Purple Light</p>");
  skins_list.append(skin_purple_light);
  var skin_green_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-green-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-green-active'></span><span class='bg-green' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px'>Green Light</p>");
  skins_list.append(skin_green_light);
  var skin_red_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-red-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-red-active'></span><span class='bg-red' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px'>Red Light</p>");
  skins_list.append(skin_red_light);
  var skin_yellow_light =
          $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-yellow-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-yellow-active'></span><span class='bg-yellow' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
                  + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
                  + "</a>"
                  + "<p class='text-center no-margin' style='font-size: 12px;'>Yellow Light</p>");
  skins_list.append(skin_yellow_light);

  demo_settings.append("<h4 class='control-sidebar-heading'>Skins</h4>");
  demo_settings.append(skins_list);

  tab_pane.append(demo_settings);
  $("#control-sidebar-home-tab").after(tab_pane);

  setup();

  /**
   * Toggles layout classes
   *
   * @param String cls the layout class to toggle
   * @returns void
   */
  function change_layout(cls) {
    $("body").toggleClass(cls);
    AdminLTE.layout.fixSidebar();
    //Fix the problem with right sidebar and layout boxed
    if (cls == "layout-boxed")
      AdminLTE.controlSidebar._fix($(".control-sidebar-bg"));
    if ($('body').hasClass('fixed') && cls == 'fixed') {
      AdminLTE.pushMenu.expandOnHover();
      AdminLTE.layout.activate();
    }
    AdminLTE.controlSidebar._fix($(".control-sidebar-bg"));
    AdminLTE.controlSidebar._fix($(".control-sidebar"));
  }

  /**
   * Replaces the old skin with the new skin
   * @param String cls the new skin class
   * @returns Boolean false to prevent link's default action
   */
  function change_skin(cls) {
    $.each(my_skins, function (i) {
      $("body").removeClass(my_skins[i]);
    });

    $("body").addClass(cls);
    store('skin', cls);
    return false;
  }

  /**
   * Store a new settings in the browser
   *
   * @param String name Name of the setting
   * @param String val Value of the setting
   * @returns void
   */
  function store(name, val) {
    if (typeof (Storage) !== "undefined") {
      localStorage.setItem(name, val);
    } else {
      window.alert('Please use a modern browser to properly view this template!');
    }
  }

  /**
   * Get a prestored setting
   *
   * @param String name Name of of the setting
   * @returns String The value of the setting | null
   */
  function get(name) {
    if (typeof (Storage) !== "undefined") {
      return localStorage.getItem(name);
    } else {
      window.alert('Please use a modern browser to properly view this template!');
    }
  }

  /**
   * Retrieve default settings and apply them to the template
   *
   * @returns void
   */
  function setup() {
    var tmp = get('skin');
    if (tmp && $.inArray(tmp, my_skins))
      change_skin(tmp);

    //Add the change skin listener
    $("[data-skin]").on('click', function (e) {
      e.preventDefault();
      change_skin($(this).data('skin'));
    });

    //Add the layout manager
    $("[data-layout]").on('click', function () {
      change_layout($(this).data('layout'));
    });

    $("[data-controlsidebar]").on('click', function () {
      change_layout($(this).data('controlsidebar'));
      var slide = !AdminLTE.options.controlSidebarOptions.slide;
      AdminLTE.options.controlSidebarOptions.slide = slide;
      if (!slide)
        $('.control-sidebar').removeClass('control-sidebar-open');
    });

    $("[data-sidebarskin='toggle']").on('click', function () {
      var sidebar = $(".control-sidebar");
      if (sidebar.hasClass("control-sidebar-dark")) {
        sidebar.removeClass("control-sidebar-dark")
        sidebar.addClass("control-sidebar-light")
      } else {
        sidebar.removeClass("control-sidebar-light")
        sidebar.addClass("control-sidebar-dark")
      }
    });

    $("[data-enable='expandOnHover']").on('click', function () {
      $(this).attr('disabled', true);
      AdminLTE.pushMenu.expandOnHover();
      if (!$('body').hasClass('sidebar-collapse'))
        $("[data-layout='sidebar-collapse']").click();
    });

    // Reset options
    if ($('body').hasClass('fixed')) {
      $("[data-layout='fixed']").attr('checked', 'checked');
    }
    if ($('body').hasClass('layout-boxed')) {
      $("[data-layout='layout-boxed']").attr('checked', 'checked');
    }
    if ($('body').hasClass('sidebar-collapse')) {
      $("[data-layout='sidebar-collapse']").attr('checked', 'checked');
    }

  }

//add input
$(document).ready(function(){

  var counter = 2;

  $("#addButton").click(function () {


  var newTextBoxDiv = $(document.createElement('div'))
       .attr("class", 'body' + counter);

  newTextBoxDiv.after().html('<div class="col-lg-1"><div class="form-group"><label class="text-left">'+ counter + '-</label></div></div>' +
        '<div class="col-lg-8"><div class="form-group"><input class="form-control" type="text" name="input' + counter +
        '" id="input' + counter + '" value="" ></div></div>'+
        '<div class="col-lg-3"><div class="form-group"><input class="form-control" type="text" name="input' + counter +
        '" id="input' + counter + '" value="" ></div></div>');

  newTextBoxDiv.appendTo("#AddGroup"), newTextBoxDiv.appendTo("#AddGroup2");


  counter++;
   });

   $("#removeButton").click(function () {
  if(counter==2){
        alert("لا يمكن حذف اكثر من ذلك");
        return false;
     }

  counter--;

      $(".body" + counter).remove();

   });
});
 //add input

$('#table').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );


//date
$( function() {
    $( "#datepicker,#datepicker2,#datepicker3,#datepicker4,#datepicker5").datepicker();
} );
//date

//Change the direction of writing in page login
$('input[type=text]').on('keyup',function(){
if($(this).val().charCodeAt(0) < 200){
    $(this).css('direction','ltr');
}else{
    $(this).css('direction','rtl');
}
})


//$('.box-body .btnAddRemove button').blur(function(){
//    $(this).css('direction','ltr')
//})

	$(document).ready(function(){

    //let's create arrays
    var first = [
        {display: "التربة", value: "التربة" },
        {display: "1التربة", value: "1التربة" },
        {display: "2التربة", value: "2التربة" },
        {display: "3التربة", value: "3التربة" }];

    var second = [
        {display: "1", value: "1" },
        {display: "2", value: "2" },
        {display: "3", value: "3" },
        {display: "4", value: "4" }];

    var thired = [
        {display: "مواد بناء1", value: "1مواد بناء" },
        {display: "2مواد بناء", value: "2مواد بناء" },
        {display: "مواد بناء3", value: "3مواد بناء" },
        {display: "مواد بناء4", value: "4مواد بناء" }];

    //If parent option is changed
    $("#parent_selection").change(function() {
            var parent = $(this).val(); //get option value from parent

            switch(parent){ //using switch compare selected option and populate child
                  case 'first':
                    list(first);
                    break;
                  case 'second':
                    list(second);
                    break;
                  case 'thired':
                    list(thired);
                    break;
                default: //default child option is blank
                    $("#child_selection").html('');
                    break;
               }
    });

    //function to populate child select box
    function list(array_list)
    {
        $("#child_selection").html(""); //reset child options
        $(array_list).each(function (i) { //populate child options
            $("#child_selection").append("<option value=+array_list[i].value+>"+array_list[i].display+"</option>");
        });
    }

    });





    // validation form in page login


    $('#submit').on('click',function(e){
      var username=$("#username").val();
      var password=$("#password").val();


      e.preventDefault();
      if(username == 'manager' && password == 123){
          window.location = "../../pages/02_samples/managerSamplesList.php";
      }
      if(username == 'secretary' && password == 123){
        window.location = "../../pages/02_samples/secretarySamplesList.php";
      }
      if(username == 'checker' && password == 123){
        window.location = "../../pages/03_chekes/checkerCheckesList.php";
      }
      if(username == 'technical' && password == 123){
        window.location = "../../pages/03_chekes/customerSamplesList.php";
      }
      if(username == 'customer' && password == 123){
        window.location = "../../pages/02_samples/managerSamplesList.php";
      }
      else if(username == '' || password == ''){
          $(".text-danger").html("ادخل اسم المستخدم وكلمة المرو").show().fadeOut(5000);
      }else{
          $(".text-info").html("خطأ في اسم المستخدم او كلمة المرور").show().fadeOut(5000);
      }
  });



//add tr in page  asphaltCoreCheckResultsAddEdit
$(document).ready(function(){
var counter = 2;
$("#btnAdd-asphalt").on("click", function () {

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#TextBoxContainer-asphalt").append(div);
function GetDynamicTextBox(value) {
    return '<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control " type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control " type="number" name="input' + counter +'" id="input' + counter + '"></td>' +'<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>'+'<td class="col-lg-1"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>'
    }
     counter++;
});
$("#remove-asphalt").click(function () {
if(counter==2){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#TextBoxContainer-asphalt tr").last().remove();
});
});
//add tr in page  asphaltCoreCheckResultsAddEdit




//add tr in page  BitumenCheckResults
$(document).ready(function(){
var counter = 2;
$("#btnAdd-bitumen").on("click", function () {

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#TextBoxContainer-bitumen").append(div);
function GetDynamicTextBox(value) {
    return '<td class="col-lg-1 "><label name="input' + counter +'" id="input' + counter + '">'+ counter +'</label></td>' + '<td class="col-lg-4"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-2"><input class="form-control " type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-2"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>'
    }
     counter++;
});
$("#remove-bitumen").click(function () {
if(counter==2){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#TextBoxContainer-bitumen tr").last().remove();
});
});
//add tr in page  BitumenCheckResults




//add tr in page  BitumenCheckResults
$(document).ready(function(){
var counter = 2;
$("#btnAdd-intrelock").on("click", function () {

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#TextBoxContainer-intrelock").append(div);
function GetDynamicTextBox(value) {
    return '<td class="col-lg-2"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control " type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-1"><input class="form-control " type="text" name="input' + counter +'" id="input' + counter + '"></td>'+ '<td class="col-lg-1"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td> '+'<td class="col-lg-3"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>'
    }
     counter++;
});
$("#remove-intrelock").click(function () {
if(counter==2){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#TextBoxContainer-intrelock tr").last().remove();
});
});
//add tr in page  BitumenCheckResults






//add tr in page  schmidt
$(document).ready(function(){
var counter = 2;
$("#add-schmidt").on("click", function () {

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#TextBoxContainer-schmidt").append(div);
function GetDynamicTextBox(value) {
    return '<td class="col-lg-2"><input class="form-control" type="number" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-3"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-2"><input class="form-control " type="text" name="input' + counter +'" id="input' + counter + '"></td>' + '<td class="col-lg-2"><input class="form-control " type="text" name="input' + counter +'" id="input' + counter + '"></td>'+ '<td class="col-lg-2"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></td> '
    }
     counter++;
});
$("#remove-schmidt").click(function () {
if(counter==2){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#TextBoxContainer-schmidt tr").last().remove();
});
});
//add tr in page  schmidt




//add tr in page  sampleRequest
$(document).ready(function(){
/*var counter = 1;

$("#addSample").click( function () {

var div = $("<div class='row form-group'>");
div.html(GetDynamicTextBox(""));
$("#TextBoxContainer-sample").append(div);
function GetDynamicTextBox(value) {
    return '<div class="col-lg-1"><label>'+counter+'</label></div>' + '<div class="col-lg-1"><input class="form-control" type="text" name="code' + counter +'" id="code' + counter + '"></div>' + '<div class="col-lg-1"><input class="form-control " type="text" name="price' + counter +'" id="price' + counter + '"></div>' + '<div class="col-lg-1"><input class="form-control " type="text" name="qty' + counter +'" id="qty' + counter + '"></div>'+ '<div class="col-lg-3"><select name="tests'+counter+'" id="tests'+counter+'" class="form-control"><option name="input' + counter +'" id="input' + counter + '"></option></select></div>' + '<div class="col-lg-2"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></div>' + '<div class="col-lg-1"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></div>' + '<div class="col-lg-2"><input class="form-control" type="text" name="input' + counter +'" id="input' + counter + '"></div>'
    }
     counter++;

});
$("#removeSample").click(function () {
if(counter==2){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#TextBoxContainer-sample .row").last().remove();
});*/
});



//select ooption
$('.mySelect').on('change', function()
{
    $('.disableSelect').removeAttr("disabled");
});


//select row table
 //var manager_array=[];
 console.log("This is demo file ");
    if(manager_array.length == 0){
   $('.editable').hide();
   $('.remove-tr').hide();
   $(".done").hide();
   }

$('table #tableSelectedRow ').on('click','tr',function(){
var currentColor =$(this).data("color");
if($(this).attr('data-click-state') == 1) {
$(this).attr('data-click-state', 0)

    var index_number_of_element_selected =$(this).index();
    manager_array = removeA(manager_array, $(this).attr('id'));
    if(index_number_of_element_selected%2==0){
        $(this).css('background-color', currentColor);
       }else{
             $(this).css('background-color', currentColor);
       }
} else {
    var s =$(this).attr('data-click-state', 1)
    var c= $(this).css('background-color', '#f79627');
manager_array.push($(this).attr('id'));
}

    $('.remove-tr').on('click',function(){
        manager_array.forEach(function(item){
            $('table tbody tr#'+item).remove();
            //s.remove();
        });
    })
    if(manager_array.length != 1){
   $('.editable').hide();
   $(".done").hide();
   }else{
      $('.editable').show();
      $(".done").show();
   }
    if(manager_array.length > 0){
   $('.remove-tr').show();
   }else{
     $('.remove-tr').hide();
   }

 });





//add tr in page  pavedTllesCompresslonCheckAddEdit
$(document).ready(function(){
 var counter = 0;
$("#add-row-paved-tiles").on("click", function () {
    counter++;
    var div = $("<tr />");
    div.html(GetDynamicTextBox(""));
    $("#paved-tiles").append(div);
    function GetDynamicTextBox(value) {
   return '<td class="col-lg-1"><span  type="text" name="input' + counter +'" id="multiply-' + counter + '">'+counter+'</span></td>' + '<td class="col-lg-1"><input class="input form-control" type="number" name="area' + counter +'" id="area-' + counter + '"></td>' + '<td class="col-lg-1"><input class="input form-control " type="number" name="multiply' + counter +'" id="multiply2-' + counter + '"></td>' + '<td class="col-lg-1"><input class=" input form-control " type="number" name="multiply' + counter +'" id="multiply3-' + counter + '"></td>'+ '<td class="col-lg-1"><input class="input form-control" type="number" name="input' + counter +'" id="wight-' + counter + '"></td> '+'<td class="col-lg-1"><input class="input form-control" type="number" name="failure-' + counter +'" id="failure-' + counter + '"></td>'+'<td class="col-lg-1"><input class="input form-control" type="text" name="strength' + counter +'" id="strength-' + counter + '" disabled></td>'+'<td class="col-lg-1"><input class="avarage input form-control" type="text" name="stress' + counter +'" id="stress-' + counter + '"></td>'
}
         $('.input').on('change', function() {
             avarage_paved_tiles();
             const myCount = this.id.split('-')[1];
//            console.log(this)

             var strength ;
            var area = $('#area-'+myCount+'').val();
             var failure = $('#failure-'+myCount+'').val();
              var strength = $('#strength-'+myCount+'').val();
              var stress;


            console.log(strength);
//              console.log(failure);
             strength = Math.round(parseFloat(failure*102)/area);

             stress = parseFloat(strength*1.18);
             console.log(stress);
              $('#paved-tiles').find(`#strength-${myCount}`).val(strength);
              $('#paved-tiles').find(`#stress-${myCount}`).val(stress);

    });

     });


$("#remove-row-paved-tiles").click(function () {
if(counter==0){
      alert("لا يمكن حذف المزيد");
      return false;
   }
counter--;
     $("#paved-tiles tr").last().remove();
    avarage_paved_tiles();
 });
});
//add tr in page  pavedTllesCompresslonCheckAddEdit





//add-row-compression
$(document).ready(function(){
let counter = 0;

$("#add-row-compression").on("click", function () {
    counter++;

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#concrete-compression").append(div);
function GetDynamicTextBox(value) {

    return '<td class="col-lg-1"><span  type="text" name="input' + counter +'" id="multiply-' + counter + '">'+counter+'</span></td>' + '<td class="col-lg-1"><input class="input form-control" type="number" name="multiply' + counter +'[]" id="multiply1-' + counter + '"></td>' + '<td class="col-lg-1"><input class="input form-control " type="number" name="multiply' + counter +'[]" id="multiply2-' + counter + '"></td>' + '<td class="col-lg-1"><input class=" input form-control " type="number" name="multiply' + counter +'[]" id="multiply3-' + counter + '"></td>'+ '<td class="col-lg-2"><input class="input form-control" type="number" name="wight-' + counter +'" id="wight-' + counter + '"></td> '+'<td class="col-lg-2"><input  readonly class="form-control" type="text" name="density-' + counter +'" id="density-' + counter + '"></td>'+'<td class="col-lg-2"><input  class="input form-control" type="number" name="failure-' + counter +'" id="failure-' + counter + '"></td>'+'<td class="col-lg-2"><input readonly  class="stTotal form-control" type="text" name="stress-' + counter +'" id="stress-' + counter + '"><input type="hidden" name="counter" value="'+counter+'"></td>'

    }

        $('.input').on('change', function() {
        const myCount = this.id.split('-')[1];
//            console.log(this)
        var total=1;
        var wight = $('#wight-'+myCount+'').val();
//            console.log(wight)
        var failure = $('#failure-'+myCount+'').val();
        var multiply_1 = $('#multiply1-'+myCount+'').val();
        var multiply_2 = $('#multiply2-'+myCount+'').val();
        var density ;
        var stress;
        var sum=[];

        $('#concrete-compression').find('input[name^="multiply'+myCount+'"]').each(function(val) {
			if ($(this).val() !== "") total *= parseFloat($(this).val());
				density = Math.round(parseFloat((wight/total)*1000000));
				stress = Math.round(parseFloat((failure*10200)/(multiply_1*multiply_2)));
			});
            console.log('xx',myCount);
			$('#concrete-compression').find(`#density-${myCount}`).val(density);
			$('#concrete-compression').find(`#stress-${myCount}`).val(stress);
			updateTotals();
			sDevlation();
         });


});


$("#remove-row-compression").click(function () {
  if(counter==1){
  alert("لا يمكن حذف المزيد");
  return false;
}
counter--;
 $("#concrete-compression tr").last().remove();
    updateTotals();
    sDevlation();
});
});


//add-row-porcelain-tiles
$(document).ready(function(){
let counter = 0;

$("#add-row-porcelain-tiles").on("click", function () {
    counter++;
    $('#counterr').val(counter);
   console.log(counter);
var div = $("<tr class='tr-1'/>");
div.html(GetDynamicTextBox(""));
$("#porcelain-tiles").append(div);
function GetDynamicTextBox(value) {
     return '<th><span  type="text" name="input' + counter +'" id="multiply-' + counter + '">'+counter+'</span></th>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'[]" id="multiply-' + counter + '"></td>'
    }

    console.log(counter);
    $('.input').on('change', function() {
         avarage_porcelain_1();
         avarage_porcelain_2();
        avarage_porcelain_3();
        avarage_porcelain_4();
        avarage_porcelain_5();
        avarage_porcelain_6();
        avarage_porcelain_7();
         avarage_porcelain_8();
         avarage_porcelain_9();
         avarage_porcelain_10();
        avarage_porcelain_11();

         });
      });

$("#remove-row-porcelain-tiles").click(function () {
  if(counter==0){
  alert("لا يمكن حذف المزيد");
  return false;
}else{
   counter--;
    $('#counterr').val(counter);
 $("#porcelain-tiles .tr-2").last().remove();
    $("#porcelain-tiles .tr-1").last().remove();
 avarage_porcelain_1();
         avarage_porcelain_2();
        avarage_porcelain_3();
        avarage_porcelain_4();
        avarage_porcelain_5();
        avarage_porcelain_6();
        avarage_porcelain_7();
         avarage_porcelain_8();
         avarage_porcelain_9();
         avarage_porcelain_10();
        avarage_porcelain_11();
}
});
});



//add-row-ceramic-tiles
$(document).ready(function(){
let counter = 0;

$("#add-row-ceramic-walls").on("click", function () {
    counter++;

var div = $("<tr class='tr-1'/>");
div.html(GetDynamicTextBox(""));
$("#ceramic-walls").append(div);
function GetDynamicTextBox(value) {
     return '<th><span  type="text" name="input' + counter +'" id="multiply-' + counter + '">'+counter+'</span></th>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-2 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-3 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-4 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-5 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-6 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="avarage-7 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="input form-control" type="text" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="avarage-8 form-control" type="number" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-9 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="input form-control" type="text" name="multiply' + counter +'" id="multiply-' + counter + '"></td>'+ '<td><input class="avarage-10 form-control" type="number" id="multiply-' + counter + '"></td>'
    }

    $('.input').on('change', function() {

        avarage_ceramic_Wall_1();
        avarage_ceramic_Wall_2();
        avarage_ceramic_Wall_3();
        avarage_ceramic_Wall_4();
        avarage_ceramic_Wall_5();
        avarage_ceramic_Wall_6();
        avarage_ceramic_Wall_7();
        avarage_ceramic_Wall_8();
        avarage_ceramic_Wall_9();
        avarage_ceramic_Wall_10();
         });
      });

$("#remove-row-ceramic-walls").click(function () {
  if(counter==0){
  alert("لا يمكن حذف المزيد");
  return false;
}else{
   counter--;
 $("#ceramic-walls .tr-2").last().remove();
    $("#ceramic-walls .tr-1").last().remove();

        avarage_ceramic_Wall_1();
        avarage_ceramic_Wall_2();
        avarage_ceramic_Wall_3();
        avarage_ceramic_Wall_4();
        avarage_ceramic_Wall_5();
        avarage_ceramic_Wall_6();
        avarage_ceramic_Wall_7();
        avarage_ceramic_Wall_8();
        avarage_ceramic_Wall_9();
        avarage_ceramic_Wall_10();
}

});
});




//add-row-marshall
$(document).ready(function(){
let counter = 0;

$("#add-row-marshall").on("click", function () {
    counter++;

var div = $("<tr />");
div.html(GetDynamicTextBox(""));
$("#marshall").append(div);
function GetDynamicTextBox(value) {
     return '<th><span  type="text" name="input' + counter +'" id="multiply-' + counter + '">'+counter+'</span></th>' + '<td><input class="avarage-1 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-2 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-3 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-4 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-5 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-6 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="avarage-7 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-8 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="avarage-9 input form-control" type="number" id="multiply-' + counter + '"></td>' + '<td><input class="avarage-10 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>' + '<td ><input class="avarage-11 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>'+ '<td><input class="avarage-12 input form-control" type="number" id="multiply-' + counter + '"></td>'+ '<td><input class="avarage-13 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>'+ '<td><input class="avarage-14 input form-control" type="number" name="multiply' + counter +'" id="multiply-' + counter + '"></td>'
    }

    $('.input').on('change', function() {

        avarage_marshall_1();
        avarage_marshall_2();
        avarage_marshall_3();
        avarage_marshall_4();
        avarage_marshall_5();
        avarage_marshall_6();
        avarage_marshall_7();
        avarage_marshall_8();
        avarage_marshall_9();
        avarage_marshall_10();
        avarage_marshall_11();
        avarage_marshall_12();
        avarage_marshall_13();
        avarage_marshall_14();

         });
      });

$("#remove-row-marshall").click(function () {
  if(counter==0){
  alert("لا يمكن حذف المزيد");
  return false;
}else{
   counter--;
 $("#marshall tr").last().remove();
        avarage_marshall_1();
        avarage_marshall_2();
        avarage_marshall_3();
        avarage_marshall_4();
        avarage_marshall_5();
        avarage_marshall_6();
        avarage_marshall_7();
        avarage_marshall_8();
        avarage_marshall_9();
        avarage_marshall_10();
        avarage_marshall_11();
        avarage_marshall_12();
        avarage_marshall_13();
        avarage_marshall_14();

}

});
});


})(jQuery, $.AdminLTE);




//remove tr table
function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}


//page concreteCompressionCheck
function updateTotals(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('.stTotal'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseInt(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage').value = Math.round(sumAv);
            }
        })
}

function sDevlation(){
    var sum = [];
    var sD = 0;
	var sDsum = 0;
	var variation =0;
     var totals = Array.from(document.querySelectorAll('.stTotal'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseInt(total.value));
                mu = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                //document.querySelector('#sDevlation').value = mu;
            }
        })
		totals.forEach(function(total){
            if(total.value){
                sum.push(parseInt(total.value));
                sDsum = sum.reduce(function(acc, el){
                    return acc + Math.pow(el - mu, 2);
                },0);
				sD = Math.round( Math.sqrt(sDsum / (sum.length - 1)));
                document.querySelector('#sDevlation').value = sD;
				variation = Math.round(sD / mu * 100);
				document.querySelector('#variation').value = variation;

            }
        })

}
//end concreteCompressionCheck



//start function avarage_porcelain
function avarage_porcelain_1(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-1'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-1').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_2(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-2'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-2').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_3(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-3'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-3').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_4(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-4'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-4').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_5(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-5'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-5').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_6(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-6'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-6').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_7(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-7'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-7').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_8(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-8'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-8').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_9(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-9'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-9').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_10(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-10'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-10').value = parseFloat(sumAv);
            }
        })
}

function avarage_porcelain_11(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#porcelain-tiles .avarage-11'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-porcelain-11').value = parseFloat(sumAv);
            }
        })
}



//start function avarage_ceramic_Wall
function avarage_ceramic_Wall_1(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-1'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-1').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_2(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-2'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-2').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_3(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-3'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-3').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_4(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-4'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-4').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_5(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-5'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-5').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_6(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-6'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-6').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_7(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-7'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-7').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_8(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-8'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-8').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_9(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-9'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-9').value = parseFloat(sumAv);
            }
        })
}

function avarage_ceramic_Wall_10(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#ceramic-walls .avarage-10'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-ceramic-10').value = parseFloat(sumAv);
            }
        })
}


//start function ceramic_Wall
function avarage_marshall_1(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-1'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-1').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_2(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-2'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-2').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_3(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-3'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-3').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_4(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-4'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-4').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_5(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-5'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-5').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_6(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-6'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-6').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_7(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-7'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-7').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_8(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-8'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-8').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_9(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-9'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-9').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_10(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-10'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-10').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_11(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-11'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-11').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_12(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-12'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-12').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_13(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-13'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-13').value = parseFloat(sumAv);
            }
        })
}

function avarage_marshall_14(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#marshall .avarage-14'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#avarage-marshall-14').value = parseFloat(sumAv);
            }
        })
}





function avarage_paved_tiles(){
    var sum = [];
    var sumAv = 0;
     var totals = Array.from(document.querySelectorAll('#paved-tiles .avarage'));
        totals.forEach(function(total){
            if(total.value){
                sum.push(parseFloat(total.value));
//                console.log(sum)
                sumAv = sum.reduce(function(acc, el){
                    return acc + el;
                },0) / sum.length;
                document.querySelector('#paved-avarage').value = parseFloat(sumAv);
            }
        })
}
/*
the js for profile page

*/
//for image update in user profile;
$("#imgload").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgshow').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});
$('.password_p').on('keyup',function (){
   var password_profile = $('#password_profile');
   var confirm_password = $('#confirm_password');
  if(password_profile.val().length > 0){
   if(password_profile.val() != confirm_password.val()) {
     $('#valid').html("كلمة السر غير متطابقة");
   } else {
      $('#valid').html('');
   }

   }
 });


 $('.submitP').submit('click',function(e){
   var password_profile = $('#password_profile');
   var confirm_password = $('#confirm_password');
   //   var confirm_password = ('#confirm_password'.val());

   if(confirm_password.val() != password_profile.val() ){
       e.preventDefault();
   }
  else {
      return
  }
 });
 /* this for userPrivlage page*/
var menuItemCount;
 function aaMenus() {
  if (jQuery(window).width() < 1200) { // iPad and Desktop
          $('.sidebar-toggle').on('click',function() {
          $('.menu-mobile').slideToggle();
          $('body').toggleClass('actiev-body');
          }
          )} else {
  }

}

//menuItemCount=$(this).data('count');
aaMenus();
$('.checkList').on('change',function(){
  menuItemCount=$(this).data('count');
  console.log("This is menuItemCount :"+menuItemCount);
      $(".form-check-input-"+menuItemCount).prop('checked', $("#checkAll_"+menuItemCount).prop('checked'));
});

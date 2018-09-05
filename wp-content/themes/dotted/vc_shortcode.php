<?php 


// Button
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Button", 'dotted'),
   "base" => "otbutton",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Dotted Element',
   "params" => array( 
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button", 'dotted'),
         "param_name" => "btn",
      ),
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Icon', 'dotted'),
         "param_name" => "icon",
         "value" => "",        
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Size", 'dotted'),
         "param_name" => "size",
         "value" => array(                        
                     esc_html__('Medium', 'dotted')   => '',
                     esc_html__('Larg', 'dotted')   => 'ot-lg',
                     esc_html__('Extra Larg', 'dotted')   => 'ot-ex',
                  ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Color", 'dotted'),
         "param_name" => "bg",
         "value" => array(                        
                     esc_html__('Main Color', 'dotted')   => 'btn-main-color',
                     esc_html__('Dark Color', 'dotted')   => 'btn-sub-color',
                     esc_html__('Border Main Color', 'dotted')   => 'btn-border-main-color',
                     esc_html__('Border Dark Color', 'dotted')   => 'btn-border-sub-color',
                  ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Style", 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Normal', 'dotted')   => '',
                     esc_html__('Rounded', 'dotted')   => 'btn-rounded',
                     esc_html__('Pill', 'dotted')   => 'btn-pill',
                  ),
      ),
    )));
}

// Member Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Member Team", 'dotted'),
   "base" => "member",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Photo", 'dotted'),
         "param_name" => "photo",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Name", 'dotted'),
         "param_name" => "name",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Job", 'dotted'),
         "param_name" => "job",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Link", 'dotted'),
         "param_name" => "link",
         "value" => "",
      ),
       array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Member Details", 'dotted'),
         "param_name" => "content",
         "value" => "",
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Social 1", 'dotted'),
         "param_name" => "social1",         
         "description" => esc_html__("Add icon socials follow: http://fontawesome.io/icons/", 'dotted'),
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Social 2", 'dotted'),
         "param_name" => "social2",         
         "description" => esc_html__("Add icon socials follow: http://fontawesome.io/icons/", 'dotted'),
      ), 
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Social 3", 'dotted'),
         "param_name" => "social3",         
         "description" => esc_html__("Add icon socials follow: http://fontawesome.io/icons/", 'dotted'),
      ), 
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Social 4", 'dotted'),
         "param_name" => "social4",         
         "description" => esc_html__("Add icon socials follow: http://fontawesome.io/icons/", 'dotted'),
      ), 
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Square Photo', 'dotted')   => 'style1',
                     esc_html__('Circle Photo', 'dotted')   => 'style2',
                  ), 
      ),    
    )
    ));
}

// Team Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Team Slider", 'dotted'),
   "base" => "teamslider",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1 : Square Photo', 'dotted')   => 'style1',
                     esc_html__('Style 2 : Circle Photo', 'dotted')   => 'style2',
                     ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Columns", 'dotted'),
         "param_name" => "col",
         "value" => "",
         "description" => esc_html__("Enter number columns. Recommend: 3, 4 or 5", 'dotted')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Speed Slider", 'dotted'),
         "param_name" => "speed",
         "value" => "",
         "description" => esc_html__("Enter number millisecond. Default: 7000", 'dotted')
      ),          
    )
    ));
}

// Icon box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Icon Box", 'dotted'),
   "base" => "servicesbox",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1 : Verticle Box', 'dotted')   => 'style1',
                     esc_html__('Style 2 : Horizontal Box', 'dotted')   => 'style2',
                     esc_html__('Style 3 : Small Box', 'dotted')   => 'style3',
                     ), 
      ),
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'dotted'),
         "param_name" => "icon",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title of box", 'dotted')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'dotted'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("content right.", 'dotted')
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Button", 'dotted'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'dotted'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1', 'style2') ),
      ),         
    )
    ));
}

// Testimonial Box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Testimonial Item", 'dotted'),
   "base" => "testitem",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(      
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image", 'dotted'),
         "param_name" => "photo",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Name", 'dotted'),
         "param_name" => "name",
         "value" => "",
      ), 
      array(
        'type' => 'textfield',
         "heading" => esc_html__("Extra", 'dotted'),
         "param_name" => "job",
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'dotted'),
         "param_name" => "content",
         "value" => "",
      ),              
    )
    ));
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Testimonial Silder", 'dotted'),
   "base" => "testslide",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1 : Without Avatar', 'dotted')   => 'style1',
                     esc_html__('Style 2 : With Avatar 1', 'dotted')   => 'style2',
                     esc_html__('Style 3 : With Avatar 2', 'dotted')   => 'style3',
                     ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Title and Navigation', 'dotted'),
         "param_name" => "title",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3', 'style2') ),
         "description" => esc_html__("Enter title to show navigation.", 'dotted')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Slide Speed', 'dotted'),
         "param_name" => "speed",
         "description" => esc_html__("Enter number millisecond. Default: 6000.", 'dotted')
      ), 
    )));
}

// Pricing Table
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Pricing Table", 'dotted'),
   "base" => "table",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Pricing Table Style 1', 'dotted')   => 'style1',
                     esc_html__('Pricing Table Style 2', 'dotted')   => 'style2',
                     ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title of table", 'dotted')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Price", 'dotted'),
         "param_name" => "price",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Per", 'dotted'),
         "param_name" => "per",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1') ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Short Description", 'dotted'),
         "param_name" => "desc",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2') ),
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'dotted'),
         "param_name" => "content",
         "value" => "",
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Button", 'dotted'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'dotted'),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Border Full", 'dotted'),
         "param_name" => "border",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2') ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Feature Table?', 'dotted'),
         "param_name" => "feature",
      ), 
    )));
}


// Call To Action
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Call To Action", 'dotted'),
   "base" => "call_to",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(  
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1(Light)', 'dotted')       => 'style1',
                     esc_html__('Style 2(Dark)', 'dotted')        => 'style2',
                     esc_html__('Style 3(2 Buttons)', 'dotted')   => 'style3',
                     ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
         "value" => "",
      ),      
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'dotted'),
         "param_name" => "content",
         "value" => "",
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Button", 'dotted'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'dotted'),
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Button 2", 'dotted'),
         "param_name" => "linkbox2",         
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3') ),
      ),  
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Button", 'dotted'),
         "param_name" => "icon",
         "value" => "",
      ),     
    )
   ));
}


// Lastest Blog Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Latest Blog", 'dotted'),
   "base" => "lastest_sli",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title With Navigation", 'dotted'),
         "param_name" => "title",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Post Show", 'dotted'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'dotted')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Visible", 'dotted'),
         "param_name" => "visible",
         "value" => array(                        
                     esc_html__('1 Item', 'dotted')    => '1',
                     esc_html__('2 Items', 'dotted')   => '2',
                     esc_html__('3 Items', 'dotted')   => '3',
                     ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Speed Slider", 'dotted'),
         "param_name" => "speed",
         "value" => "",
         "description" => esc_html__("Default: 6000.", 'dotted')
      ),
   )));
}

// Lastest Blog 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Latest Blog 2", 'dotted'),
   "base" => "lastest_blog",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Post Show", 'dotted'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'dotted')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Visible", 'dotted'),
         "param_name" => "visible",
         "value" => array(                        
                     esc_html__('1 Item', 'dotted')    => '1',
                     esc_html__('2 Items', 'dotted')   => '2',
                     esc_html__('3 Items', 'dotted')   => '3',
                     esc_html__('4 Items', 'dotted')   => '4',
                     ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Speed Slider", 'dotted'),
         "param_name" => "speed",
         "value" => "",
         "description" => esc_html__("Default: 6000.", 'dotted')
      ),
   )));
}

// Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Portfolio Filter", 'dotted'),
   "base" => "portfoliof",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Dotted Element',
   "params" => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Show", 'dotted'),
         "param_name" => "num",
         "description" => esc_html__("Number Show of box", 'dotted')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text Show All", 'dotted'),
         "param_name" => "all",
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Column', 'dotted'),
         "param_name" => "col",
         "value" => array(
                     esc_html__('3 Columns', 'dotted')     => '4', 
                     esc_html__('4 Columns', 'dotted')     => '3',
                     esc_html__('2 Columns', 'dotted')     => '6',
                  ), 
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style 2", 'dotted'),
         "param_name" => "style2",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("No Gutter", 'dotted'),
         "param_name" => "gutter",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Hide Filter", 'dotted'),
         "param_name" => "filter",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Hide Categories Under Title", 'dotted'),
         "param_name" => "categ",
      ),
    )));
}

// Portfolio Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Portfolio Silder", 'dotted'),
   "base" => "portfolio_sli",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(                        
                     esc_html__('Style 1 : Title Under Image', 'dotted')   => 'style1',
                     esc_html__('Style 2 : Title In Overlay', 'dotted')   => 'style2',
                     ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title With Navigation", 'dotted'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style2') ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Portfolio Show", 'dotted'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'dotted')
      ), 
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Visible Of Row', 'dotted'),
         "param_name" => "visible",
         "value" => array(                        
                     esc_html__('2 Columns', 'dotted')   => '2',
                     esc_html__('3 Columns', 'dotted')   => '3',
                     esc_html__('4 Columns', 'dotted')   => '4',
                     ), 
      ),
      array(
        'type' => 'checkbox',
         "heading" => esc_html__("Bottom Navigation", 'dotted'),
         "param_name" => "navi",
      ), 
      array(
        'type' => 'checkbox',
         "heading" => esc_html__("Hide Categories Under Title", 'dotted'),
         "param_name" => "categ",
      ),
      array(
        'type' => 'checkbox',
         "heading" => esc_html__("No Gutter", 'dotted'),
         "param_name" => "gutter",
      ), 
    )
    ));
}


// Our Facts
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Fun Facts", 'dotted'),
   "base" => "facts",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Dotted Element',
   "params" => array( 
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Icon', 'dotted'),
         "param_name" => "icon",
         "value" => "",        
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle", 'dotted'),
         "param_name" => "stitle",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'dotted'),
         "param_name" => "num",
         "description" => esc_html__("Number of box", 'dotted')
      ),
      array(
        'type' => 'checkbox',
         "heading" => esc_html__("Dark Background", 'dotted'),
         "param_name" => "dark",
      ),
    )));
}

// Our Skill
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Progress Skill", 'dotted'),
   "base" => "skill",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Dotted Element',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'dotted'),
         "param_name" => "title",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'dotted'),
         "param_name" => "num",
         "description" => esc_html__("Number of skill", 'dotted')
      ),
    )));
}

// Logo Client
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Logo Clients", 'dotted'),
   "base" => "clients",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(   
                     esc_html__('Carousel', 'dotted')  => 'style1', 
                     esc_html__('Group', 'dotted')     => 'style2',
                     ), 
      ),
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Logo Clients', 'dotted'),
         "param_name" => "gallery",
         "value" => "",
         "description" => esc_html__("Use link out for logo client by enter link input caption image, View guide here: http://vegatheme.com/images/add-link-logo.jpg , Recomended Size: 200 x 130. ", 'dotted')
      ),
       array(
         "type" => "textfield",
         "heading" => esc_html__('Title', 'dotted'),
         "param_name" => "title",
         "value" => '',
         "dependency"  => array( 'element' => 'style', 'value' => array('style1') ),
      ),  
      array(
         "type" => "textfield",
         "heading" => esc_html__('Column', 'dotted'),
         "param_name" => "col",
         "value" => '',
         "description" => esc_html__('Number columns each rows. Recommend: 4, 5 or 6. Default: 4.', 'dotted')
      ),     
    )
    ));
}

// Image Carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Image Carousel", 'dotted'),
   "base" => "carousel",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Images', 'dotted'),
         "param_name" => "gallery",
         "value" => "",
      ),
    )));
}

// Twitter
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Twitter", 'dotted'),
   "base" => "twitter",
   "class" => "",
   "category" => 'Dotted Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('User ID', 'dotted'),
         "param_name" => "user",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Number Show', 'dotted'),
         "param_name" => "number",
         "value" => "",
      ),
      array(
         "type" => "dropdown",
         "heading" => esc_html__('Style', 'dotted'),
         "param_name" => "style",
         "value" => array(   
                     esc_html__('Style1: Align Left', 'dotted')  => 'style1', 
                     esc_html__('Style1: Align Center', 'dotted')     => 'style2',
                     ), 
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Show Navigation', 'dotted'),
         "param_name" => "navi",
         "dependency"  => array( 'element' => 'style', 'value' => array('style1') ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__('Dark Background', 'dotted'),
         "param_name" => "dark",
      ), 
    )));
}

?>

http_path = "/themes/custom/bob_default"
css_dir = "css"
sass_dir = "assets/sass"
images_dir = "assets/images"
javascripts_dir = "js"
fonts_dir = "assets/fonts"
generated_images_dir = "img"
generated_javascripts_dir = "js"
http_images_path = http_path + "/" + generated_images_dir
http_generated_images_path = http_images_path
output_style = (environment == :production) ? :compressed :  :expanded

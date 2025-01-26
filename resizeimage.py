from PIL import Image

def resize_image(input_path, output_path, new_width, new_height):
    img = Image.open(input_path)
    resized_img = img.resize((new_width, new_height))
    resized_img.save(output_path)
input_image_path = "2.jpg"
output_image_path = "2_r.jpg"
new_width = 800
new_height = 600

resize_image(input_image_path, output_image_path, new_width, new_height)
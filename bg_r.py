from rembg import remove 
from PIL import Image 

input_path = 'man.jpg'
output_path = '2.jpg' # Change the output extension to .jpg

input_image = Image.open(input_path)
output_image = remove(input_image)

# Convert RGBA image to RGB before saving as JPEG
if output_image.mode == 'RGBA':
    output_image = output_image.convert('RGB')

output_image.save(output_path)

print(f"Output saved as {output_path}")
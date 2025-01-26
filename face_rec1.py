import face_recognition

def compare_faces(image_path1, image_path2):
    # Load the images
    image1 = face_recognition.load_image_file(image_path1)
    image2 = face_recognition.load_image_file(image_path2)

    # Get face encodings for each image
    encoding1 = face_recognition.face_encodings(image1)[0]
    encoding2 = face_recognition.face_encodings(image2)[0]

    # Compare the face encodings
    results = face_recognition.compare_faces([encoding1], encoding2)
    
    # Calculate the similarity percentage
    similarity_percentage = face_recognition.face_distance([encoding1], encoding2)[0] * 100

    return results[0], similarity_percentage

# Example usage
image_path1 = "1_r.jpg"
image_path2 = "2_r.jpg"

is_same_person, similarity = compare_faces(image_path1, image_path2)

if is_same_person:
    print(f"The images are of the same person with {similarity:.2f}% similarity.")
else:
    print(f"The images are of different persons with {similarity:.2f}% dissimilarity.")
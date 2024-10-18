// Function to enlarge the image
function enlargeImage(img) {
    var modal = document.getElementById('imageModal');
    var modalImg = document.getElementById('modalImage');
    modal.style.display = "block";
    modalImg.src = img.src;
}

// Close image modal
function closeImageModal() {
    document.getElementById('imageModal').style.display = "none";
}

// Function to show description modal
function showDescriptionModal(title, content) {
    var modal = document.getElementById('descriptionModal');
    document.getElementById('descriptionTitle').innerText = title;
    document.getElementById('descriptionContent').innerHTML = content; 
    modal.style.display = "block";
}

// Close description modal
function closeDescriptionModal() {
    document.getElementById('descriptionModal').style.display = "none";
}

// Function to show struggles modal
function showStrugglesModal(title, content) {
    var modal = document.getElementById('strugglesModal');
    document.getElementById('strugglesTitle').innerText = title;
    document.getElementById('strugglesContent').innerHTML = content; 
    modal.style.display = "block";
}

// Close struggles modal
function closeStrugglesModal() {
    document.getElementById('strugglesModal').style.display = "none";
}

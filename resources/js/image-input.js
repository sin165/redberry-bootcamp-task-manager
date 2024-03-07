const profilePictureImg = document.querySelector('#profile-picture');
const profilePictureInput = document.querySelector('#profile-picture-input');
const deleteProfilePictureButton = document.querySelector('#delete-profile-picture');
const existingProfilePictureSrc = profilePictureImg.src;

profilePictureInput.onchange = () => {
    const file = profilePictureInput.files[0];
    if(file) {
        profilePictureImg.src = URL.createObjectURL(file);
        deleteProfilePictureButton.removeAttribute('disabled');
    }
}

deleteProfilePictureButton.onclick = e => {
    e.preventDefault();
    profilePictureInput.value = null;
    profilePictureImg.src = existingProfilePictureSrc;
    deleteProfilePictureButton.setAttribute('disabled', true);
}


const coverImg = document.querySelector('#cover');
const coverInput = document.querySelector('#cover-input');
const deleteCoverButton = document.querySelector('#delete-cover');
const existingCoverSrc = coverImg.src;

coverInput.onchange = () => {
    const file = coverInput.files[0];
    if(file) {
        coverImg.src = URL.createObjectURL(file);
    }
    deleteCoverButton.removeAttribute('disabled');
}

deleteCoverButton.onclick = e => {
    e.preventDefault();
    coverInput.value = null;
    coverImg.src = existingCoverSrc;
    deleteCoverButton.setAttribute('disabled', true);
}

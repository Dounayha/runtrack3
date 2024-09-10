function citation() {
    const texteCitation = document.getElementById('citation').textContent;
    console.log(texteCitation);
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('button').addEventListener('click', citation);
});
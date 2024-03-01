function updatePageLoadCount() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '/Count/index');
    xhr.onload = function() {
        const count = JSON.parse(xhr.responseText);
        document.getElementById('numOfPageVisits').innerHTML = count.count + ' page visits.';
    };
    xhr.send();
}

window.onload = updatePageLoadCount;
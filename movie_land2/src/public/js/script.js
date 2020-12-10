window.onload = function () {
    let btnRefresh = document.querySelector('#btnSearch');

    if (btnRefresh) {
        btnRefresh.addEventListener('click', refreshData);
    }

    function refreshData() {
        let xhttp = new XMLHttpRequest();
        xttp.open("GET", "https://api.themoviedb.org/3/search/movie?api_key=6985e562c05ec6150e49c08a88da0226&language=fr&page=1&include_adult=false&query=matrix");
        xttp.send();

        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {

                let html = "";
                for (ad of dataApi) {

                }

                let contentAds = document.querySelector('#listmovie');
            }

        }
    }
}
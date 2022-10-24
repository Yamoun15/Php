

$("#btnSearch").click(function () {
    if ($("#searchBox").val() == "") {
        alert("Search something!");
    } else {
        let sendData = {
            searchText: $("#searchBox").val()
        };
        $.ajax({
            url: "../Controller/articleSearchC.php",
            type: "POST",
            data: sendData,

            success: function (res) {
                let articles = JSON.parse(res);

                $("#searchResult").empty();

                for (const article of articles) {
                    let description = article.description;
                    let descriptionCut = description.substr(0, 100);
                    $("#searchResult").append(`
                    <div class="card ms-5 mt-3 col-md-5">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-8">
                            <div class="card-body">
                                <strong for="" class="healthKtitle">${article.title}</strong>
                                <p class="articaldetail">${descriptionCut}...</p>
                                <a href="../Controller/articleDetailC.php?articleId=${article.id}" ><button class="btn-readmore">Read More> </button></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4  mt-3">
                            <img src="../storages/healthKnowl/${article.photo}" class="rounded float-end articlePhoto" alt="DetailPhoto">
                        </div>
                        <input type="hidden" name="id" value="${article.id}">
                    </div>
                </div>
                `);
                }

            },
            error: function (err) {
                alert(err);
            }
        })
    }
});


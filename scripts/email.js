function sendMail() {
    var tempParams = {
        Name:document.getElementById("Name").value,
        Email:document.getElementById("Email").value,
        Phone_Number:document.getElementById("Phone_Number").value,
        Comment_Sect:document.getElementById("Comment").value,
    };
    document.getElementById("Name").value = "";
    document.getElementById("Email").value = "";
    document.getElementById("Phone_Number").value = "";
    document.getElementById("Comment").value = "";


    emailjs.send('emailservc','my_template',tempParams)
        .then(function (res) {
            console.log("success", res.status);
            alert('email send');
        })
}
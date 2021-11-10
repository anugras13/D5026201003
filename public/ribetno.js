$.validator.addMethod(
  "letterswithbasicpunc",
  function (value, element) {
    return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
  },
  "Letters or punctuation only please"
);
$(document).ready(function () {
  $("#validasi").validate({
    rules: {
      fname: {
        required: true,
        letterswithbasicpunc: true,
      },
      uname: {
        required: true,
        minlength: 6,
        maxlength: 8,
      },
      email: {
        required: true,
        email: true,
      },
      state: {
        required: true,
        state: true,
      },
      address: {
        required: true,
      },
      zip: {
        required: true,
        digits: true,
        minlength: 6,
        maxlength: 6,
      },
    },
    messages: {
      fname: {
        required: "Harus diisi yaaa",
        letterswithbasicpunc: "Gaboleh angka bos",
      },
      uname: {
        required: "Harus diisi lah yaaa",
        minlength: "harus lebih dari 5 huruf/angka",
        maxlength: "tidak boleh lebih dari 8 huruf/angka",
      },
      email: {
        required: "Harus diisi lah yaaa",
        email: "email anda tidak valid :D",
      },
      state: {
        required: "Harus diisi lah yaaa",
      },
      address: {
        required: "Harus diisi lah yaaa",
      },
      zip: {
        required: "Harus diisi lah yaaa",
        digits: "harus pake angka saja yaa",
        minlength: "minimal 6 digit ya",
        maxlength: "maximal 6 digit ya",
      },
    },
  });
});

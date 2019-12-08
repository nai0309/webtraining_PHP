var name = '';
var btn = document.getElementById('btn');

function wcomeGame() {
  swal.fire({ // 遊戲前輸入名字
    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
    imageHeight: 300,
    imageAlt: `Oops!~image is broken!`,
    title: `水煮蛋肌保養機密破解！`,
    text: `先為自己取一個命定主角名吧～`,
    input: `text`,
    inputValue:`姊的美免開濾鏡`,
    confirmButtonText: `確定`,
    cancelButtonText: `懶得取`,
    showCancelButton: true,
    allowOutsideClick: false
  }).then((ans) => {
    if (ans.dismiss === 'cancel') { //不輸入名字，使用noName
      name = '保養懶人';
      swal.fire({
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title: `我已經看出你的懶潛力了！`,
        text: `那就稱你為${name}吧～`,
        confirmButtonText: `開始遊戲`,
        cancelButtonText: `反悔自己取`,
        showCancelButton: true,
        allowOutsideClick: false
      }).then((ans) => { //再次確認是否更名
        if (ans.dismiss === 'cancel') { //更名重整頁面
          location.reload();
        } else { //不更名進入遊戲
          swal.fire({
            imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
            imageHeight: 300,
            imageAlt: `Oops!~image is broken!`,
            title: `考驗即將開始`,
            confirmButtonText: `ok`,
            allowOutsideClick: false
          }).then(gameOn);
        }
      });
    } else { //自己輸入，抓value
      name = ans.value;
      swal.fire({
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title: `${name}`,
        text: `歡迎加入變美的行列，從你取的名字，就能看出你想變美的決心！`,
        confirmButtonText: `開始遊戲`,
        cancelButtonText: `重新命名`,
        showCancelButton: true,
        allowOutsideClick: false
      }).then((ans) => { //再次確認是否更名
        if (ans.dismiss === 'cancel') { //更名重整頁面
          location.reload();
        } else { //不更名進入遊戲
          swal.fire({
            imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
            imageHeight: 300,
            imageAlt: `Oops!~image is broken!`,
            title: `考驗即將開始`,
            confirmButtonText: `ok`,
            allowOutsideClick: false
          }).then(gameOn);
        }
      });
    };
  });
}

function gameOn() { //開始遊戲
  swal.fire({ //遊戲前言，是否準備好開始
    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
    imageHeight: 300,
    imageAlt: `Oops!~image is broken!`,
    title: `別小看基礎保養的重要性！`,
    text: `做得好出門根本自帶soptlight！`,
    confirmButtonText: `自信滿分，開始吧！`,
    cancelButtonText: `懶人魂上身，改天吧...`,
    showCancelButton: true,
    allowOutsideClick: false
  }).then((ans) => {
    if (ans.dismiss === 'cancel') { //還沒準備好，遊戲跳出
      swal.fire({
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title: `男/女神顏又離你更遠了...`,
        text: `沒關係！我們永遠在這期盼你的回頭～`,
        allowOutsideClick: false
      });
    } else {
      swal.fire({ //準備好，遊戲開始
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title:`5關基本保養快問快答`,
        text: `來看看你平常的保養是否正確，只要錯一題就直接Bye嘍～`,
        allowOutsideClick: false
      }).then(() => {
        swal.fire({
          imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
          imageHeight: 300,
          imageAlt: `Oops!~image is broken!`,
          title: `story 1`,
          text: `story line 1`,
          confirmButtonText: `yes, ans.`,
          cancelButtonText: `no, ans.`,
          showCancelButton: true,
          allowOutsideClick: false
        }).then((ans) => {
          if (ans.dismiss === 'cancel') {
            swal.fire({
              imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
              imageHeight: 300,
              imageAlt: `Oops!~image is broken!`,
              title: `game over`,
              text: `story line`,
              allowOutsideClick: false
            });
          } else {
            swal.fire({
              imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
              imageHeight: 300,
              imageAlt: `Oops!~image is broken!`,
              title: `game`,
              text: `story line`,
              allowOutsideClick: false
            }).then(() => {
              swal.fire({
                imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                imageHeight: 300,
                imageAlt: `Oops!~image is broken!`,
                title: `story 2`,
                text: `story line 2`,
                confirmButtonText: `yes, ans.`,
                cancelButtonText: `no, ans.`,
                showCancelButton: true,
                allowOutsideClick: false
              }).then((ans) => {
                if (ans.dismiss === 'cancel') {
                  swal.fire({
                    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                    imageHeight: 300,
                    imageAlt: `Oops!~image is broken!`,
                    title: `game over`,
                    text: `story line`,
                    allowOutsideClick: false
                  });
                } else {
                  swal.fire({
                    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                    imageHeight: 300,
                    imageAlt: `Oops!~image is broken!`,
                    title: `game`,
                    text: `story line`,
                    allowOutsideClick: false
                  }).then(() => {
                    swal.fire({
                      imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                      imageHeight: 300,
                      imageAlt: `Oops!~image is broken!`,
                      title: `story 3`,
                      text: `story line 3`,
                      confirmButtonText: `yes, ans.`,
                      cancelButtonText: `no, ans.`,
                      showCancelButton: true,
                      allowOutsideClick: false
                    }).then((ans) => {
                      if (ans.dismiss === 'cancel') {
                        swal.fire({
                          imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                          imageHeight: 300,
                          imageAlt: `Oops!~image is broken!`,
                          title: `game over`,
                          text: `story line`,
                          allowOutsideClick: false
                        });
                      } else {
                        swal.fire({
                          imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                          imageHeight: 300,
                          imageAlt: `Oops!~image is broken!`,
                          title: `game`,
                          text: `story line`,
                          allowOutsideClick: false
                        }).then(() => {
                          swal.fire({
                            imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                            imageHeight: 300,
                            imageAlt: `Oops!~image is broken!`,
                            title: `story 4`,
                            text: `story line 4`,
                            confirmButtonText: `yes, ans.`,
                            cancelButtonText: `no, ans.`,
                            showCancelButton: true,
                            allowOutsideClick: false
                          }).then((ans) => {
                            if (ans.dismiss === 'cancel') {
                              swal.fire({
                                imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                                imageHeight: 300,
                                imageAlt: `Oops!~image is broken!`,
                                title: `game over`,
                                text: `story line`,
                                allowOutsideClick: false
                              });
                            } else {
                              swal.fire({
                                imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                                imageHeight: 300,
                                imageAlt: `Oops!~image is broken!`,
                                title: `game`,
                                text: `story line`,
                                allowOutsideClick: false
                              }).then(() => {
                                swal.fire({
                                  imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                                  imageHeight: 300,
                                  imageAlt: `Oops!~image is broken!`,
                                  title: `story 5`,
                                  text: `story line 5`,
                                  confirmButtonText: `yes, ans.`,
                                  cancelButtonText: `no, ans.`,
                                  showCancelButton: true,
                                  allowOutsideClick: false
                                }).then((ans) => {
                                  if (ans.dismiss === 'cancel') {
                                    swal.fire({
                                      imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                                      imageHeight: 300,
                                      imageAlt: `Oops!~image is broken!`,
                                      title: `game over`,
                                      text: `story line`,
                                      allowOutsideClick: false
                                    });
                                  } else {
                                    swal.fire({
                                      imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                                      imageHeight: 300,
                                      imageAlt: `Oops!~image is broken!`,
                                      title: `congratulation you completed the game!`,
                                      text: `story line`,
                                      allowOutsideClick: false
                                    }).then(() => {
                                      completed(1);
                                    })
                                  };
                                });
                              });
                            };
                          });
                        });
                      };
                    });
                  });
                };
              });
            });
          };
        });
      });
    };
  });
}
function completed(e) {
  document.body.style.backgroundImage = "url('https://i.pinimg.com/474x/c5/21/15/c52115827e95d4a29e5729e29983653a.jpg')";
  btn.textContent = "恭喜過關";


  btn.removeEventListener("click", wcomeGame);
  btn.addEventListener("click", function () {
    location.reload();
   })
   
}

wcomeGame();
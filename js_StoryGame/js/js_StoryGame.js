var name = '';
var btn = document.getElementById('btn');

function wcomeGame() {
  swal.fire({ // 遊戲前輸入名字
    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
    imageHeight: 300,
    imageAlt: `Oops!~image is broken!`,
    title: `懂吃不發胖小測驗`,
    text: `請先輸入你的吃貨名`,
    input: `text`,
    inputValue:`無名愛吃鬼`,
    confirmButtonText: `確定`,
    cancelButtonText: `懶得取`,
    showCancelButton: true,
    allowOutsideClick: false
  }).then((ans) => {
    if (ans.dismiss === 'cancel') { //不輸入名字，使用noName
      name = '發胖大師';
      swal.fire({
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title: `懶得取名？`,
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
        title: `哈嘍～${name}`,
        text: `帶著你的吃貨魂，讓我們看看你是不是懂吃懂挑不發胖！`,
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
    title: ``,
    text: ``,
    confirmButtonText: ``,
    cancelButtonText: ``,
    showCancelButton: true,
    allowOutsideClick: false
  }).then((ans) => {
    if (ans.dismiss === 'cancel') { //還沒準備好，遊戲跳出
      swal.fire({
        imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
        imageHeight: 300,
        imageAlt: `Oops!~image is broken!`,
        title: `男/女神顏又離你更遠了...`,
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
          title: `第1關.無麵不歡愛麵族`,
          text: `一包50g王子麵＆50g烏龍麵，熱量誰比較低？`,
          confirmButtonText: `滷味必點王子麵`,
          cancelButtonText: `咀嚼感滿分烏龍麵`,
          showCancelButton: true,
          allowOutsideClick: false
        }).then((ans) => {
          if (ans.dismiss === 'cancel') {
            swal.fire({
              imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
              imageHeight: 300,
              imageAlt: `Oops!~image is broken!`,
              title: `Game over！`,
              text: `親！你安內毋湯，毛孔被堵住粉刺會爆走啊！`,
              allowOutsideClick: false
            });
          } else {
            swal.fire({
              imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
              imageHeight: 300,
              imageAlt: `Oops!~image is broken!`,
              title: `卸妝絕對是保養第一步！`,
              text: `無論是男是女，上妝與否，都別忘記卸妝，室外的髒汙才不會附著在臉上！`,
              allowOutsideClick: false
            }).then(() => {
              swal.fire({
                imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                imageHeight: 300,
                imageAlt: `Oops!~image is broken!`,
                title: `保養第2步.`,
                text: `卸妝後關鍵！多做這步才能真正趕跑粉刺、黑頭，你覺得會是...`,
                confirmButtonText: `只卸妝不夠，要再洗一次臉`,
                cancelButtonText: `卸好妝當然直接上保養品！`,
                showCancelButton: true,
                allowOutsideClick: false
              }).then((ans) => {
                if (ans.dismiss === 'cancel') {
                  swal.fire({
                    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                    imageHeight: 300,
                    imageAlt: `Oops!~image is broken!`,
                    title: `Game over！`,
                    text: `親～卸妝只是將表面髒東西洗掉是不夠的，要再洗一次才能深層清潔毛孔。`,
                    allowOutsideClick: false
                  });
                } else {
                  swal.fire({
                    imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                    imageHeight: 300,
                    imageAlt: `Oops!~image is broken!`,
                    title: `卸後洗臉才能深層清潔毛孔！`,
                    text: `不錯喔～看來你平常都有好好做清潔，多餘油脂、粉刺、黑頭不想跟你分手都難！`,
                    allowOutsideClick: false
                  }).then(() => {
                    swal.fire({
                      imageUrl: `https://i.pinimg.com/474x/9d/2e/07/9d2e076d57810ffdb5a0318b7c5e90dd.jpg`,
                      imageHeight: 300,
                      imageAlt: `Oops!~image is broken!`,
                      title: `保養第3步.`,
                      text: `懂清潔就對一半了！`,
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
                          title: `Game over！`,
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
                                title: `Game over！`,
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
                                      title: `Game over！`,
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
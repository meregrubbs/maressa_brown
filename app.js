// HAMBURGER MENU
let hamburgerIcon = document.querySelector('.hamburger-icon');
let hamburgerMenu = document.querySelector('.hamburger-menu');
let mobileNav = document.querySelector('.mobile-nav');

hamburgerIcon.addEventListener('click', hamburgerMenuToggle);

function hamburgerMenuToggle() {
  if (hamburgerMenu.style.backgroundColor === 'transparent') {
    mobileNav.style.display = 'flex';
    hamburgerMenu.style.backgroundColor = '#FFEBF3';
  } else {
    mobileNav.style.display = 'none';
    hamburgerMenu.style.backgroundColor = 'transparent';
  }
}

// // INSTA-FEED
// const token =
//   'IGQVJXYmUwWUx4UlVCbG1qTk1abDZAjU29KcWVRNVB4cDk5cEFIVlN2UGJvSlQ3WDRsOTV4V0tpcDJsZAzdzYWREYnYxZA2RSQVBCWC1CcU8tWHFfQnJfLWdveUx2RG85elNSVVlpODRUVW1KaUJpTjFOWQZDZD';
// const user_id = '17841400106440021';
// const instafeed = document.getElementById('instafeed');
// const one = document.querySelector('.one');
// const two = document.querySelector('.two');
// const three = document.querySelector('.three');
// const four = document.querySelector('.four');

// let ids = []; // will be an array of ids

// // HTTP Request Setup
// function easyHTTP() {
//   this.http = new XMLHttpRequest();
// }

// easyHTTP.prototype.get = function(url, callback) {
//   this.http.open('GET', url, true);

//   let self = this;
//   this.http.onload = function() {
//     if (self.http.status === 200) {
//       callback(null, self.http.responseText);
//     } else {
//       callback('Error: ' + self.http.status);
//     }
//   };

//   this.http.send();
// };

// // Run the GET Request for media id
// const http = new easyHTTP();
// http.get(
//   `https://graph.instagram.com/${user_id}/media?fields=id,caption&access_token=${token}`,
//   function(err, data) {
//     if (err) {
//       console.log(err);
//     } else {
//       // parse data
//       result = JSON.parse(data);
//       media = result.data;

//       // locate most recent 10 ids
//       for (let i = 0; i < 10; i++) {
//         ids[i] = media[i].id;
//       }

//       // Run GET Request for images
//       http.get(
//         `https://graph.instagram.com/${ids[0]}?fields=media_type,permalink,media_url&access_token=${token}`,
//         function(err, data) {
//           if (err) {
//             console.log(err);
//           } else {
//             // parse data
//             result = JSON.parse(data);

//             // create img/video tag
//             if (
//               result.media_type === 'IMAGE' ||
//               result.media_type === 'CAROUSEL_ALBUM'
//             ) {
//               one.innerHTML = `<a target="_blank" href="${result.permalink}">
//           <img src="${result.permalink}media?size=m" ></img></a>`;
//             } else {
//               one.innerHTML = `<a target="_blank" href="${result.permalink}">
//           <video src="${result.permalink}media?size=m"></video></a>`;
//             }

//             // two
//             http.get(
//               `https://graph.instagram.com/${ids[1]}?fields=media_type,permalink,media_url&access_token=${token}`,
//               function(err, data) {
//                 if (err) {
//                   console.log(err);
//                 } else {
//                   // parse data
//                   result = JSON.parse(data);

//                   // create img/video tag
//                   if (
//                     result.media_type === 'IMAGE' ||
//                     result.media_type === 'CAROUSEL_ALBUM'
//                   ) {
//                     two.innerHTML = `<a target="_blank" href="${result.permalink}">
//               <img src="${result.permalink}media?size=m"></img></a>`;
//                   } else {
//                     two.innerHTML = `<a target="_blank" href="${result.permalink}">
//               <video src="${result.permalink}media?size=m"></video></a>`;
//                   }

//                   // three
//                   http.get(
//                     `https://graph.instagram.com/${ids[2]}?fields=media_type,permalink,media_url&access_token=${token}`,
//                     function(err, data) {
//                       if (err) {
//                         console.log(err);
//                       } else {
//                         // parse data
//                         result = JSON.parse(data);

//                         // create img/video tag
//                         if (
//                           result.media_type === 'IMAGE' ||
//                           result.media_type === 'CAROUSEL_ALBUM'
//                         ) {
//                           three.innerHTML = `<a target="_blank" href="${result.permalink}">
//                     <img src="${result.permalink}media?size=m"></img></a>`;
//                         } else {
//                           three.innerHTML = `<a target="_blank" href="${result.permalink}">
//                     <video src="${result.permalink}media?size=m"></video></a>`;
//                         }

//                         // four
//                         http.get(
//                           `https://graph.instagram.com/${ids[3]}?fields=media_type,permalink,media_url&access_token=${token}`,
//                           function(err, data) {
//                             if (err) {
//                               console.log(err);
//                             } else {
//                               // parse data
//                               result = JSON.parse(data);

//                               // create img/video tag
//                               if (
//                                 result.media_type === 'IMAGE' ||
//                                 result.media_type === 'CAROUSEL_ALBUM'
//                               ) {
//                                 four.innerHTML = `<a target="_blank" href="${result.permalink}">
//                         <img src="${result.permalink}media?size=m"></img></a>`;
//                               } else {
//                                 four.innerHTML = `<a target="_blank" href="${result.permalink}">
//                         <video src="${result.permalink}media?size=m"></video></a>`;
//                               }
//                             }
//                           }
//                         );
//                       }
//                     }
//                   );
//                 }
//               }
//             );
//           }
//         }
//       );
//     }
//   }
// );

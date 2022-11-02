<style scoped>
textarea {
  border-radius: 3px;
}
.chat {
    height: 100%;
}

.chat .card-body {
    display: block;
    margin: 0px 10px 10px 10px;
    border-radius: 10px;
    height: calc(100% - 50px);
}

#messages-body {
    background-color: var(--dark);
    height: 83%;
    overflow-y: auto;
}

#messages-body > div.container{
    height: 65vh;
    overflow-y: auto;
}

.message {
    background-color: var(--default);
    color:white;
    margin-top: 15px;
    padding: 3px 0px;
    border-radius: 3px;
}

.justify-content-end .message{
    background-color: #0ecc7a;
}

.message:nth-child(1){
    margin-top: 5px;
}

.message-user {
    font-size: smaller;
}
.message-content {
    font-size: small;
}
</style>

<template>
  <div class="card chat mb-0">
        <div class="card-header">
            <h3 class="title pb-1 mb-1">Chat</h3>
            <!-- <p class="category">Jogos onde você está inscrito</p> -->
        </div>
        <div class="card-body all-icons">
            <div class="row" id="messages-body">
                <div class="container">
                    <div class="row px-1" v-for="item in items" :class="{ 'justify-content-start': (item.user !== 523523), 'justify-content-end': (item.user  === 523523)}">
                        <div class="message col-10" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 font-weight-bold message-user">
                                        {{ item.name }}
                                    </div>
                                    <div class="col-12 message-content">
                                        {{ item.message }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-1">
                <textarea class="col-12" name="" id="" cols="30" rows="3"></textarea>
                <div class="col-12 text-right p-0 pt-1">
                    <button class="btn-enviar btn-sm btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes

export default {
  name: 'App',
  components: {
  },
  data() {
  return {
    items: [{
    "id": 1,
    "name": "Kaitlin",
    "user": 523523,
    "message": "purus eu magna vulputate luctus cum"
    }, {
    "id": 2,
    "name": "Kaitlin",
    "user": 523523,
    "message": "gravida sem praesent id massa id nisl venenatis"
    }, {
    "id": 3,
    "name": "Henderson",
    "user": 234234,
    "message": "ultricies eu nibh quisque"
    }, {
    "id": 4,
    "name": "Orlando",
    "user": 123456,
    "message": "in hac habitasse"
    }, {
    "id": 5,
    "name": "Kaitlin",
    "user": 523523,
    "message": "a pede posuere nonummy integer"
    }, {
    "id": 6,
    "name": "Henderson",
    "user": 234234,
    "message": "tempus vivamus in"
    }, {
    "id": 7,
    "name": "Kaitlin",
    "user": 523523,
    "message": "erat curabitur gravida"
    }, {
    "id": 8,
    "name": "Kaitlin",
    "user": 523523,
    "message": "sed vestibulum sit"
    }, {
    "id": 9,
    "name": "Orlando",
    "user": 123456,
    "message": "lectus in quam fringilla rhoncus mauris enim"
    }, {
    "id": 10,
    "name": "Orlando",
    "user": 123456,
    "message": "curae mauris viverra diam vitae quam suspendisse potenti"
    }, {
    "id": 11,
    "name": "Kaitlin",
    "user": 523523,
    "message": "ridiculus mus etiam vel augue vestibulum rutrum rutrum"
    }, {
    "id": 12,
    "name": "Henderson",
    "user": 234234,
    "message": "odio porttitor id"
    }, {
    "id": 13,
    "name": "Kaitlin",
    "user": 523523,
    "message": "ipsum integer a"
    }, {
    "id": 14,
    "name": "Kaitlin",
    "user": 523523,
    "message": "in blandit ultrices enim lorem ipsum dolor sit amet"
    }, {
    "id": 15,
    "name": "Orlando",
    "user": 123456,
    "message": "blandit nam nulla integer pede justo"
    }, {
    "id": 16,
    "name": "Henderson",
    "user": 234234,
    "message": "lacus morbi quis tortor id nulla ultrices aliquet"
    }, {
    "id": 17,
    "name": "Orlando",
    "user": 123456,
    "message": "duis aliquam convallis nunc proin at turpis a pede"
    }, {
    "id": 18,
    "name": "Kaitlin",
    "user": 523523,
    "message": "vestibulum ante ipsum primis in faucibus orci luctus et"
    }, {
    "id": 19,
    "name": "Kaitlin",
    "user": 523523,
    "message": "rutrum at lorem integer tincidunt"
    }, {
    "id": 20,
    "name": "Orlando",
    "user": 123456,
    "message": "duis mattis egestas metus aenean fermentum donec"
    }, {
    "id": 21,
    "name": "Henderson",
    "user": 234234,
    "message": "nulla nisl nunc nisl duis"
    }, {
    "id": 22,
    "name": "Henderson",
    "user": 234234,
    "message": "donec diam neque vestibulum eget vulputate ut ultrices vel"
    }, {
    "id": 23,
    "name": "Henderson",
    "user": 234234,
    "message": "est et tempus semper est quam pharetra magna ac"
    }, {
    "id": 24,
    "name": "Henderson",
    "user": 234234,
    "message": "sit amet consectetuer adipiscing elit proin interdum mauris non ligula"
    }, {
    "id": 25,
    "name": "Kaitlin",
    "user": 523523,
    "message": "gravida sem praesent id massa id"
    }, {
    "id": 26,
    "name": "Orlando",
    "user": 123456,
    "message": "id mauris vulputate elementum nullam varius nulla facilisi"
    }, {
    "id": 27,
    "name": "Henderson",
    "user": 234234,
    "message": "tincidunt eget tempus vel"
    }, {
    "id": 28,
    "name": "Henderson",
    "user": 234234,
    "message": "nullam porttitor lacus at turpis donec"
    }, {
    "id": 29,
    "name": "Kaitlin",
    "user": 523523,
    "message": "volutpat erat quisque erat eros viverra eget congue"
    }, {
    "id": 30,
    "name": "Orlando",
    "user": 123456,
    "message": "sed justo pellentesque"
    }]}
}
};

const scrollSmoothToBottom = (id) => {
   const element = $(`#${id}`);
   element.animate({
      scrollTop: element.prop("scrollHeight")
   }, 2000);
}

window.onload = ()=>{
    setTimeout(()=>{scrollSmoothToBottom("messages-body");console.log('aqui')},500);
}

</script>
<!-- [
        { name: 'Jaderson', message: 'Boa noite', id: "" },
        { name: 'Messias', message: 'Que hora esse bingo começa?' },
        { name: 'Jaqueline', message: 'Está marcado para as 20:00.' },
        { name: 'João', message: 'É hoje que eu ganho essa desgraça' },
        { name: 'Miguel', message: 'Vai achando pé frio.' },
        { name: 'Jaqueline', message: 'Bora Torcer, Bora tocer.' },
        { name: 'Jaqueline', message: 'Gente, sai fora que a noite é minha.' },
        { name: 'Jaqueline', message: 'Povo besta esse gente.' },
        { name: 'Jaqueline', message: 'Ihulllllllllllllllllll.' },
        { name: 'Jaqueline', message: 'Ansioso gente.' },
    https://jsfiddle.net/9bazc6hx/2/
    -->

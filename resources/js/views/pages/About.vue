<template>
    <div class="section">
      <div class="header">
        <div class="header-title">
            <h3>
                ParadiseInSelf
                <br />
                Season — 2020
            </h3>
        </div>

        <div class="header-content">
            <div>
                <h5>UPU</h5>
                <p class="para" style="min-height: 26px">WE ARE OCEANIA</p>
                <p class="date">
                    5.mar— <br />
                    15.mar.20
                </p>
            </div>

            <div>
                <h5>The Writer</h5>
                <p class="para" style="min-height: 26px">
                    A Ferocious call to arms
                </p>
                <p class="date">
                    11.jun— <br />
                    4.jul.20
                </p>
            </div>

            <div>
                <h5>Every Brilliant Thing</h5>
                <p class="para" style="min-height: 26px">
                    What would you put on your list?
                </p>
                <p class="date">
                    25.aug— <br />
                    19.sep.20
                </p>
            </div>

            <div>
                <h5>BREAK BREAD</h5>
                <p class="para" style="min-height: 26px;">
                    Tell us who you are. Tell us where you come from.
                </p>
                <p class="date">
                    5.nov— <br />
                    28.nov.19
                </p>
            </div>
        </div>
      </div>
        <div class="about">
            <h1 class="page-title">about</h1>
            <div class="horizontal-flex">
                <div class="desc">
                    <div class="top-panel">
                        <h4>
                            Established in 1997, Silo Theatre is one of the
                            leading producers of contemporary theatre in
                            Aotearoa.
                        </h4>
                        <p>
                            We curate an annual season of work in direct
                            response to the world around us, constantly evolving
                            in response to our cultural climate. We seek to push
                            storytelling, artists and audiences forward, both in
                            our programming and company culture.
                        </p>

                        <p>
                            We aim to invigorate, agitate and illuminate. We
                            believe in theatre as a powerful agent for change.
                        </p>
                    </div>
                    <div class="bottom-panel">
                        <h6><p class="theater">SILO THEATRE TRUST</p></h6>
                        <p>
                            Jo Allison<br />Rick Carlyon (Chair)<br />Greg
                            Fahey<br />Sharon Aroha Hawke<br />Rachel Paris<br />Sarah
                            Peirse<br />Rosabel Tan<br />Peter Winder
                        </p>
                    </div>
                </div>

                <div class="season">
                    <div class="heading">
                        <h2>season archive</h2>
                        <br />
                        <p class="solo">SILO THEATRE IS ANTI–STATIC.</p>
                    </div>
                    <div class="creater">
                        <div class="creater1">
                            <img
                                src="/img/1.jpg"
                                alt="sushma"
                                width="110"
                                height="160"
                                class=" loaded"
                            />
                            <p class="name">
                                Sushma Chaudhary
                            </p>
                            <p class="job">
                                Web Developer
                            </p>
                        </div>
                        <div class="creater2">
                            <img
                                src="/img/2.jpg"
                                alt="Subham"
                                width="110"
                                height="160"
                                class=" image"
                            />
                            <p class="name">
                                Subham Kharel
                            </p>
                            <p class="job">
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LocalStorage from './../../models/storage';

    export default {
        name: "About",
        beforeMount(){
          LocalStorage.set('app_mode', 'paradiseinself')
        }
    };
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");


.section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    width: 100%;
    height: 100%;
    background-color: white;
    background-size: cover;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.horizontal-flex {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.header{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    margin-top: 50px;
}

h3 {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-weight: 600;
    font-size: 29px;
    letter-spacing: 1px;
}

p {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 35px;
    font-weight: 700;
}

.header-content {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin-top: 20px;
    width: 60%;
    margin-left: 140px;
}

.header-content div {
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 182px;
    width:170px
}
h5 {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 5px 0;
    text-transform: uppercase;
    border-bottom: 2px solid #111;
}

.para {
    font-size: 11px;
    line-height: 1;
    color: #111;
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    letter-spacing: 0.4px;
}

.date {
    line-height: 1;
    font-size: 11px;
    color: #111;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: .4px;
}

.about {
    width: 100%;
}
.about h1 {
    margin: 30px 45px 50px 180px;
    font-size: 150px;
    font-family: "Roboto", sans-serif;
}
h1 {
    margin-left: 158px;
    color: #111;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    letter-spacing: 3px;
    line-height: 1em;
    font-weight: bolder;
}

.about hr {
    width: 110px;
    margin: 0 0 10px;
    border-top: 2px solid #111;
    margin-left: 295px;
}
hr {
    border-color: #ccc;
    border-style: solid;
    border-width: 1px 0;
    height: 0;
}

h4 {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
    border-top: 2px solid #111;
    padding-top: 5px;
}
.desc {
    margin-left: 295px;
    width: 263px;
}

.desc p {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 1px;
    margin-top: 25px;
}

.bottom-panel {
    border-top: 2px #111 solid;
    padding: 10px 0 0;
    margin-top: 40px;
}

.bottom-panel h6 {
    font-size: 16px;
    font-family: "Roboto", sans-serif;
    margin-bottom: 5px;
    line-height: 1.5em;
    font-weight: 900;
    color: #111;
}
.bottom-panel .theater {
    font-size: 16px;
    font-family: "Roboto", sans-serif;
    font-weight: 900;
    color: #111;
}
.season {
    margin-left: 95px;
    max-width: 500px;
}
.heading h2 {
    font-family: "Roboto", sans-serif;
    color: #111;
    text-transform: uppercase;
    font-size: 20px;
    padding: 0 10px 0 0;
    border-bottom: 2px solid #111;
    line-height: 26px;
    font-size: 16px;
    font-weight: 400;
    margin-top: 20px;
    letter-spacing: 1px;
    width: 156px;
}
.page-title {
    margin-left: 162px;
}

.solo {
    margin-bottom: 20px;
    font-family: "Roboto", sans-serif;
    font-size: 38px;
    font-weight: 400;
    line-height: 1;
}
.creater {
    display: flex;
    margin-top: 45px;
}

.creater2 {
    margin-left: 83px;
}
.name {
    margin: auto;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: #111;
    margin-top: 8px;
}

.job {
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: #111;
    margin-top: 8px;
}
@media (min-width: 576px) {

  .desc{
    margin-left: 0;
  }
}

@media (min-width: 768px) {

  .desc{
    margin-left: 0;
  }
}

@media (min-width: 992px) {

  .desc{
    margin-left: 0;
  }
}

@media (min-width: 1155px) {
  .header-content{
    margin-left: 0;
  }
  .desc{
    margin-left: 100px;
  }

}
</style>

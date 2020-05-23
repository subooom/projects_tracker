<template>
    <div class="section">
        <div class="paradise">
            <h3>
                ParadiseInSelf
                <br />
                Season — 2020
            </h3>
        </div>

        <div class="content">
            <div style="width:170px">
                <h5>UPU</h5>
                <p class="para" style="min-height: 26px">WE ARE OCEANIA</p>
                <p class="date">
                    5.mar— <br />
                    15.mar.20
                </p>
            </div>

            <div style="width:170px">
                <h5>The Writer</h5>
                <p class="para" style="min-height: 26px">
                    A Ferocious call to arms
                </p>
                <p class="date">
                    11.jun— <br />
                    4.jul.20
                </p>
            </div>

            <div style="width:170px">
                <h5>Every Brilliant Thing</h5>
                <p class="para" style="min-height: 26px">
                    What would you put on your list?
                </p>
                <p class="date">
                    25.aug— <br />
                    19.sep.20
                </p>
            </div>

            <div style="width:170px">
                <h5>BREAK BREAD</h5>
                <p class="para" style="min-height: 26px;">
                    Tell us who you are. Tell us where you come from.
                </p>
                <p class="date">
                    5.nov—

                    <br />
                    28.nov.19
                </p>
            </div>
        </div>
        <div class="about" style="margin-left:130px">
            <h1>about</h1>
            <hr />
            <div class="desc" style="margin-left:133px">
                <h4>
                    Established in 1997, Silo Theatre is one of the leading
                    producers of contemporary theatre in Aotearoa.
                </h4>
                <p>
                    We curate an annual season of work in direct response to the
                    world around us, constantly evolving in response to our
                    cultural climate. We seek to push storytelling, artists and
                    audiences forward, both in our programming and company
                    culture.
                </p>
                <p>
                    We aim to invigorate, agitate and illuminate. We believe in
                    theatre as a powerful agent for change.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "About"
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
.paradise {
    display: flex;
    flex-dirextion: row;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    text-align: center;
    align-items: center;
    margin-top: 50px;
}

h3 {
    color: black;
    font-family: "Roboto", sans-serif;
    font-weight: 600;
    font-size: 29px;
    letter-spacing: 1px;
}

p {
    color: black;
    font-family: "Roboto", sans-serif;
    font-size: 35px;
    font-weight: 700;
}

.content {
    display: flex;
    flex-direction: row;
    margin-top: 30px;
    width: 60%;
    margin-left: 55px;
    height: 182px;
}

.content div {
    margin: auto;
}
h5 {
    color: black;
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    border-bottom: 2px solid #111;
}

.para {
    font-size: 13px;
    color: rgb(16, 16, 16);
    font-family: "Roboto", sans-serif;
    font-weight: lighter;
}

.date {
    font-size: 13px;
    color: rgb(16, 16, 16);
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    font-weight: lighter;
}

.about h1 {
    margin: 50px 45px 50px;
    font-size: 150px;
}
h1 {
    color: black;
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
    margin-left: 133px;
}
hr {
    border-color: #ccc;
    border-style: solid;
    border-width: 1px 0;
    height: 0;
}

h4 {
    color: black;
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
}

.desc p {
    color: rgb(16, 16, 16);
    font-family: "Roboto", sans-serif;
    font-size: 12px;
    font-weight: lighter;
    letter-spacing: 1px;
}
</style>

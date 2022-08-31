<template>
    <div class="winner-container">
        <h1>Nike Cortez Game Players</h1>
        <ul class="winner-header">
            <li class="winner-header-item">
                <h4>Emails</h4>
            </li>
            <li class="winner-header-item">
                <h4>Scores</h4>
            </li>
            <li class="winner-header-item">
                <h4>Shoe Sizes</h4>
            </li>
            <li class="winner-header-item">
                <h4>Email the Player</h4>
            </li>
        </ul>
        <ul class="winner-list">
            <li class="winner-item" v-for="winner in winners" :key="winner.id">
                <span class="winner-attr">{{ winner.email }}</span>

                <span class="winner-attr"> {{ winner.score }}</span>
                <span class="winner-attr"> {{ winner.shoe }}</span>
                <span class="winner-attr">
                    <a class="email-btn" :href="'mailto:' + winner.email"
                        >Email Player</a
                    ></span
                >
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["winners"],
};
</script>

<style>
.winner-container {
    width: 75%;
}
.winner-list {
    display: flex;
    flex-direction: column;
    margin-top: 0;
    padding-left: 0;
    /* box-shadow: -2px 8px 21px -14px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: -2px 8px 21px -14px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -2px 8px 21px -14px rgba(0, 0, 0, 0.75); */
}
.winner-item {
    display: grid;

    grid-template-columns: 1fr 1fr 1fr 1fr;
    border-bottom: 1px solid #f3f3f3;
    padding: 1rem 0;
}

.winner-attr:last-child {
    border: none;
}
.winner-header {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    border-bottom: 1px solid #f3f3f3;

    border-top: 1px solid #f3f3f3;
    margin-top: 0;
    padding-left: 0;
    margin-bottom: 0;
}
.winner-header-item {
    list-style-type: none;
    padding: 1rem 0;
}
.winner-item:nth-child(odd) {
    background: #f3f3f3;
}
.winner-header-item h4 {
    font-weight: 700;
    margin: 0;
}
.email-btn {
    background: green;
    color: #fff;
    padding: 0.5rem 0.75rem;
    border-radius: 5px;
}
</style>

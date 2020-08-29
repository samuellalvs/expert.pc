import React from "React";

export default function Card(props) {
    return (
        <div class="card bg-dark text-white">
            <img
                src="https://www.carrosnaweb.com.br/imgNoticias007/thumb500/L200-Triton-Sport-HPE-S-2021-20.jpg"
                class="card-img"
                alt="..."
            />
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                </p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    );
}

import React from "React";

export default function CarouselItem(props) {
    return (
        <div
            className={`carousel-item ${
                props.active == "true" ? "active" : ""
            }`}
        >
            <img
                src="https://via.placeholder.com/600X400"
                className="d-block w-100"
                alt="..."
            />
            <div className="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                </p>
            </div>
        </div>
    );
}

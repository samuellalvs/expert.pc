import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faStar } from "@fortawesome/free-solid-svg-icons";

export default function Topicos(props) {
    return (
        <div className="d-flex">
            <div className="d-flex flex-column p-3">
                <p className="m-0">{props.name}</p>
                <div className="d-flex">
                    <FontAwesomeIcon
                        icon={faStar}
                        color={props.rating >= 1 ? "#ffca05" : "black"}
                    />
                    <FontAwesomeIcon
                        icon={faStar}
                        color={props.rating >= 2 ? "#ffca05" : "black"}
                    />
                    <FontAwesomeIcon
                        icon={faStar}
                        color={props.rating >= 3 ? "#ffca05" : "black"}
                    />
                    <FontAwesomeIcon
                        icon={faStar}
                        color={props.rating >= 4 ? "#ffca05" : "black"}
                    />
                    <FontAwesomeIcon
                        icon={faStar}
                        color={props.rating >= 5 ? "#ffca05" : "black"}
                    />
                </div>
            </div>
            <div className="d-flex flex-column p-3">
                <p className="rating">{props.rating}</p>
            </div>
        </div>
    );
}

import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faStar } from "@fortawesome/free-solid-svg-icons";

import Navbar from "../../global/Navbar";

export default function Opniao() {
    return (
        <div>
            <Navbar></Navbar>
            <div className="container">
                <div className="section">
                    <div className="d-flex h-100 justify-content-center align-items center">
                        <div className="card border-0 shadow card-opniao">
                            <div className="card-body">
                                <div className="d-flex flex-column">
                                    <div className="d-flex">
                                        <div className="col-md-8">
                                            <p className="m-0">
                                                placa de video
                                            </p>
                                            <h2 className="font-weight-bold">
                                                RTX 2080 Super
                                            </h2>
                                            <div className="line mb-5"></div>
                                        </div>
                                        <div className="col-md-4">
                                            <img
                                                className="img-fluid mt-4"
                                                src="/storage/brands/gigabyte.png"
                                                alt="Gigabyte"
                                                srcset=""
                                            />
                                        </div>
                                    </div>
                                    <div className="d-flex flex-column p-3">
                                        <p className="m-0">desempenho</p>
                                        <div className="d-flex">
                                            <FontAwesomeIcon
                                                icon={faStar}
                                                color="yellow"
                                            />
                                            <FontAwesomeIcon icon={faStar} />
                                            <FontAwesomeIcon icon={faStar} />
                                            <FontAwesomeIcon icon={faStar} />
                                            <FontAwesomeIcon icon={faStar} />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

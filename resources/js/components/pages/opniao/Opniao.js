import React from "react";

import Navbar from "../../global/Navbar";
import Topicos from "../opniao/components/Topicos";

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
                                    <div className="d-flex flex-column flex-md-row">
                                        <div className="col-12 col-md-8">
                                            <p className="m-0">
                                                placa de video
                                            </p>
                                            <h2 className="font-weight-bold">
                                                RTX 2080 Super
                                            </h2>
                                            <div className="line-purple mb-5"></div>
                                        </div>
                                        <div className="col-12 col-md-4">
                                            <img
                                                className="img-fluid mt-md-4"
                                                src="/storage/brands/gigabyte.png"
                                                alt="Gigabyte"
                                            />
                                        </div>
                                    </div>
                                    <Topicos name="desempenho" rating="5.0" />
                                    <Topicos name="consumo" rating="4.3" />
                                    <Topicos name="aquecimento" rating="3.8" />
                                    <Topicos
                                        name="custo beneficio"
                                        rating="2.6"
                                    />
                                    <Topicos name="preço" rating="5.0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="section bg-light">
                <div className="container">
                    <div className="d-flex flex-column pt-5">
                        <h2 className="font-weight-bold">Avaliações</h2>
                        <div className="line-green mb-5"></div>
                    </div>
                    <div className="d-flex flex-column">
                        <div className="card shadow-sm border-0">
                            <div className="card-body">Teste</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

<template>
    <div class="lport container-fluid">
        <menu/>
        <div class="affichage p-1">
            <div v-for="port in this.portsList" v-bind:key="port.liste_port_lieu_id" class="m-2 p-1 cadre">
                <h5><a type="button" class="lien pt-1" data-toggle="modal" :data-target="'#Port' + port.liste_port_lieu_id">
                    {{port.liste_port_lieu}}
                </a></h5>
                <p class="mb-1">Emplacement : {{port.liste_port_localisation}}</p>
                <p class="mb-0 pb-1">
                    <!-- Condition pour l'affichage du logo port propre -->
                    <!-- Si le port est juste engagé -->
                    <img v-if="port.liste_port_label_pp == 1" src="img/1pp.svg" alt="Engagé Port Propre" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Engagé Port Propre">
                    <!-- Si le port est certifié -->
                    <img v-if="port.liste_port_label_pp == 2" src="img/2pp.svg" alt="Certifié Port Propre" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Certifié Port Propre">
                    <!-- Condition pour l'affichage du logo port actif en biodiversité -->
                    <!-- Si le port est juste engagé -->
                   <img v-if="port.liste_port_label_aeb == 1" src="img/1aeb.svg" alt="Engagé Actifs en Biodiversité" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Engagé Actifs en Biodiversité">
                    <!-- Si le port est certifié -->
                    <img v-if="port.liste_port_label_aeb == 2" src="img/2aeb.svg" alt="Certifié Actifs en Biodiversité" width="30" height="30" data-toggle="tooltop" data-placement="bottom" title="Certifié Actifs en Biodiversité">
                    <!-- Condition pour l'affichage du logo pavillon bleu -->
                    <img v-if="port.liste_port_label_pb == 1" src="img/pb.png" alt="Pavillon Bleu" height="30" data-toggle="tooltop" data-placement="bottom" title="Pavillon Bleu">
                </p>
                <!-- Modal d'affichage contanant d'avantage d'information sur le lieu -->
                <div class="modal fade" :id="'Port' + port.liste_port_lieu_id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <!-- Titre de la modal -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{port.liste_port_lieu}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- Contenu de la modal-->
                            <div class="modal-body p-0">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md">
                                            <p>
                                                <a class="lien" :href="port.liste_port_lien" target="_blank">Site Officiel</a><br>
                                                Localisation : {{port.liste_port_localisation}} <br>
                                                <!-- <?php include 'element/MJ_mer_logoaction.php' ?> <br>
                                                <?php include 'element/MJ_mer_vote.php' ?> <br> -->
                                            </p>
                                        </div>
                                        <div class="col-md">
                                            <iframe class="responsive-iframe" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" :src="port.liste_port_carte" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=43.17920&amp;mlon=5.68141#map=17/43.17920/5.68141" target="_blank">Afficher une carte plus grande</a></small>
                                        </div>
                                    </div>
                                    <!-- Commentaire -->
                                    <div class="esp_com row">
                                        <!-- Affichage Commentaire -->
                                        <!-- <?php 
                                        //Collecte des commentaires
                                        $sqlcom = $pdo->prepare("SELECT * FROM `jm_mer_commentaire_port` WHERE `commentaire_port_lieu_id` = $lieuID AND `commentaire_port_parent_id` IS NULL");
                                        $sqlcom->execute();
                                        $listecom = $sqlcom->fetchALL(PDO::FETCH_ASSOC);
                                        
                                        //Affichage des commentaires du lieu
                                        foreach ($listecom as $j){ 
                                            include "element/MJ_mer_affichagecom.php";
                                        }
                                        ?> -->
                                        <!-- Formulaire Commentaire -->
                                        <!-- <?php include "element/MJ_mer_formulairecom.php"; ?>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <inertia-link  v-for="link in ports.links" :href="link.url" v-bind:key="link.label" class="p-3">
                <span v-bind:class="{ policeColor: link.active  }">{{link.label}}</span>
            </inertia-link>
        </div>
    </div>
</template>

<script>

    import Menu from "../Layouts/Menu.vue"

    export default {
        components: {
            Menu,
        },

        data() {
            return {
                portsList: this.ports.data
            }
        },

        props: ['ports'],
    }
</script>

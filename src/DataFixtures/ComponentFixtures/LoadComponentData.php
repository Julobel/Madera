<?php

namespace App\DataFixtures\ComponentFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\Component;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentData extends MaderaFixtures{

    const PLOT = 'component-component-plot';
    const SABOT = 'component-component-sabot';
    const BA13 = 'component-component-ba13';
    const TUILE_MERIDIONALE = 'component-component-tuile-meridionale';
    const TUILE_CANAL = 'component-component-tuile-canal';
    const ARDOISE_PETITE = 'component-component-ardoise-petite';
    const ARDOISE_GRANDE = 'component-component-ardoise-grande';
    const LAINE_BOIS = 'component-component-laine-bois';
    const LAINE_VERRE = 'component-component-laine-verre';
    const POLYSTYRENE_EXPANSE = 'component-component-polystyrene';
    const POUTRE_35 = 'component-component-poutre-35';
    const POUTRE_45 = 'component-component-poutre-45';
    const PLANCHE_CHENE = 'component-component-planche-chene';
    const PLANCHE_TEK = 'component-component-planche-tek';

    public function load(ObjectManager $manager) {

        $plot = new Component();
        $plot ->setLabel("Plot")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ELT_MONTAGE))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'1'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'2'));
        $manager->persist($plot);
        $this->addReference(LoadComponentData::PLOT, $plot);

        $sabot = new Component();
        $sabot ->setLabel("Sabot métallique")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ELT_MONTAGE))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'3'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'4'));
        $manager->persist($sabot);
        $this->addReference(LoadComponentData::SABOT, $sabot);

        $ba13 = new Component();
        $ba13 ->setLabel("Plaque de plâtre")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(130)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::PANNEAUX))
            ->setComponentQuality($this->getReference(LoadComponentInteriorFinishData::PLATRE))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'5'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'6'));
        $manager->persist($plot);
        $this->addReference(LoadComponentData::BA13, $ba13);

        $tuile = new Component();
        $tuile->setLabel("Tuile Méridionale")
            ->setLength(500)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(300)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::TUILES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'7'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'8'));
        $manager->persist($tuile);
        $this->addReference(LoadComponentData::TUILE_MERIDIONALE, $tuile);


        $tuileCanal = new Component();
        $tuileCanal->setLabel("Tuile Canal")
            ->setLength(500)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(150)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::TUILES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'9'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'10'));
        $manager->persist($tuileCanal);
        $this->addReference(LoadComponentData::TUILE_CANAL, $tuileCanal);


        $ardoisePetite = new Component();
        $ardoisePetite->setLabel("Ardoise Petite")
            ->setLength(100)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(100)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::ARDOISES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'11'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'12'));
        $manager->persist($ardoisePetite);
        $this->addReference(LoadComponentData::ARDOISE_PETITE, $ardoisePetite);

        $ardoiseGrande = new Component();
        $ardoiseGrande->setLabel("Ardoise Grande")
            ->setLength(300)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(300)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::ARDOISES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'13'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'14'));
        $manager->persist($ardoiseGrande);
        $this->addReference(LoadComponentData::ARDOISE_GRANDE, $ardoiseGrande);

        $laineVerre = new Component();
        $laineVerre->setLabel("Laine de Verre")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(100)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ISOLATION))
            ->setComponentQuality($this->getReference(LoadComponentInsulationData::NATUREL))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'15'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'16'));
        $manager->persist($laineVerre);
        $this->addReference(LoadComponentData::LAINE_VERRE, $laineVerre);

        $laineBois = new Component();
        $laineBois->setLabel("Laine de Bois")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(100)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ISOLATION))
            ->setComponentQuality($this->getReference(LoadComponentInsulationData::BIO))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'17'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'18'));
        $manager->persist($laineBois);
        $this->addReference(LoadComponentData::LAINE_BOIS, $laineBois);

        $polystyrene = new Component();
        $polystyrene->setLabel("Polystyrène Expansé")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(40)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ISOLATION))
            ->setComponentQuality($this->getReference(LoadComponentInsulationData::SYNTH))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'19'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'20'));
        $manager->persist($polystyrene);
        $this->addReference(LoadComponentData::POLYSTYRENE_EXPANSE, $polystyrene);

        $poutre35 = new Component();
        $poutre35 ->setLabel("poutre")
            ->setLength(2400)
            ->setSection(35)
            ->setThickness(20)
            ->setWidth(35)
            ->setComponentNature($this->getReference(LoadComponentNatureData::MONTANT))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'21'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'22'));
        $manager ->persist($poutre35);
        $this->addReference(LoadComponentData::POUTRE_35, $poutre35);

        $poutre45 = new Component();
        $poutre45 ->setLabel("poutre")
            ->setLength(2400)
            ->setSection(45)
            ->setThickness(20)
            ->setWidth(45)
            ->setComponentNature($this->getReference(LoadComponentNatureData::MONTANT))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'23'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'24'));
        $manager ->persist($poutre45);
        $this->addReference(LoadComponentData::POUTRE_45, $poutre45);

        $plancheChene = new Component();
        $plancheChene ->setLabel("Planche Chene")
            ->setLength(1200)
            ->setSection(0)
            ->setThickness(20)
            ->setWidth(50)
            ->setComponentNature($this->getReference(LoadComponentNatureData::PLANCHER))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'25'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'26'));
        $manager ->persist($plancheChene);
        $this->addReference(LoadComponentData::PLANCHE_CHENE, $plancheChene);

        $plancheTek = new Component();
        $plancheTek ->setLabel("Planche Tek")
            ->setLength(1200)
            ->setSection(0)
            ->setThickness(20)
            ->setWidth(120)
            ->setComponentNature($this->getReference(LoadComponentNatureData::PLANCHER))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'27'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'28'));
        $manager ->persist($plancheTek);
        $this->addReference(LoadComponentData::PLANCHE_TEK, $plancheTek);

        $manager->flush();

    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT;
    }
}
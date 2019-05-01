using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Espace_membres
{
    #region Membre
    public class Membre
    {
        #region Member Variables
        protected int _id;
        protected string _Nom;
        protected string _Prenom;
        protected string _Email;
        protected string _Motdepasse;
        protected int _Telephone;
        protected string _Adresse;
        protected string _Ville;
        protected int _CodePostal;
        #endregion
        #region Constructors
        public Membre() { }
        public Membre(string Nom, string Prenom, string Email, string Motdepasse, int Telephone, string Adresse, string Ville, int CodePostal)
        {
            this._Nom=Nom;
            this._Prenom=Prenom;
            this._Email=Email;
            this._Motdepasse=Motdepasse;
            this._Telephone=Telephone;
            this._Adresse=Adresse;
            this._Ville=Ville;
            this._CodePostal=CodePostal;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nom
        {
            get {return _Nom;}
            set {_Nom=value;}
        }
        public virtual string Prenom
        {
            get {return _Prenom;}
            set {_Prenom=value;}
        }
        public virtual string Email
        {
            get {return _Email;}
            set {_Email=value;}
        }
        public virtual string Motdepasse
        {
            get {return _Motdepasse;}
            set {_Motdepasse=value;}
        }
        public virtual int Telephone
        {
            get {return _Telephone;}
            set {_Telephone=value;}
        }
        public virtual string Adresse
        {
            get {return _Adresse;}
            set {_Adresse=value;}
        }
        public virtual string Ville
        {
            get {return _Ville;}
            set {_Ville=value;}
        }
        public virtual int CodePostal
        {
            get {return _CodePostal;}
            set {_CodePostal=value;}
        }
        #endregion
    }
    #endregion
}